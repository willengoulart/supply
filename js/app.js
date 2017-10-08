//  Define o objeto principal da aplicação
var supply = (function() {
  'use strict';

  //  UTILITIES
  // ============

  var util = {};

  /**
   *  Formata um número para reais.
   *
   *  @param {Number} number - Número que será formatado.
   *
   *  @returns {String} - String formatada.
   */
  util.numberToCurrency = function(number) {
    return 'R$' + number.toFixed(2).toString().replace('.', ',');
  };


  /**
   *  Impede o comportamento padrão de um evento (para fins de teste e inicio de
   *    desenvolvimento).
   *
   *  @param {Event} e - O evento a ser impedido.
   */
  util.preventEvent = function(e) {
    e.preventDefault();
    e.stopPropagation();
  };


  //  PRODUCT CAROUSEL
  // ===================

  //  QUESTION: Transformar em uma classe? (Jacó acha que sim)
  var ProductCarousel = {};


  /**
   *  Mostra um modal com a imagem aumentada
   *
   *  @param {String} url - URL da imagem desejada.
   *
   *  @private
   */
  function showZoomModal(url) {
    $('#zoom-modal').modal()
      .find('.zoom-img').attr('src', url);
  }


  /**
   *  Adiciona um produto ao carrossel.
   *
   *  @param {Object} product - Dados do novo produto.
   */
  ProductCarousel.addProduct = function(product) {

    var
      // Cria um novo elemento a partir do template
      template = ProductCarousel.productTemplate.cloneNode(true).children[0],

      // Define os casos especiais para a função de preenchimento
      specialCases = {
        img_url: function(url) {
          this.src = url;
          return false;
        },
        stars: function(stars) {
          return false;
        },
        price: function(price) {
          if (product.sale_price) {
            template.querySelector('[data-fill=old_price]').textContent  = util.numberToCurrency( price );
            template.querySelector('[data-fill=discount]').textContent  = util.numberToCurrency( price - product.sale_price );
            this.innerHTML = util.numberToCurrency( product.sale_price );

          } else {
            template.querySelector('.old-price').style.display = 'none';
            template.querySelector('.discount').style.visibility = 'hidden';
            this.innerHTML = util.numberToCurrency( price );
          }

          return false;
        },
        qtd_parcelas: function(qtd) {
          template.querySelector('[data-fill=valor_parcela]').textContent  = util.numberToCurrency( (product.sale_price || product.price) / qtd );
        }
      };

    // Itera sobre os elementos preenchendo-os com dados
    Array.prototype.forEach.call(
      template.querySelectorAll('[data-fill]'),
      function(el) {
        var key = el.getAttribute('data-fill');

        if (
          // Checa se uma função especial foi definida;
          typeof specialCases[key] == 'function' &&
          // Se a função retornar `false`, parte para a próxima iteração;
          specialCases[key].call( el, product[key] ) === false

        ) return;

        // Se as outras condições não forem atendidas e existirem dados no objeto,
        //  faz as devidas alterações ao HTML.
        if (typeof product[key] !== 'undefined') el.innerHTML = product[key];
      }
    );

    // Adiciona um listener para a chamada do modal
    template.querySelector('.product-img').addEventListener('click', function() {
      showZoomModal(product.zoom_img_url);
    });

    // Adiciona o novo produto ao fim da lista do carrossel
    ProductCarousel.elem.appendChild(template);
  };


  /**
   *  Inicializa o carrossel.
   *
   *  @param {HTMLElement} elem - Elemento em que o carrossel será criado.
   */
  ProductCarousel.init = function(elem) {

    // Define elementos importantes para uso interno
    ProductCarousel.elem = elem;
    ProductCarousel.productTemplate = document.querySelector('[data-template=product]');

    // Preenche o carrossel
    productList.forEach(ProductCarousel.addProduct);

    // Chama o plugin
    $(elem).owlCarousel({
      mouseDrag: false,
      loop: true,
      nav: true,
      navText: [
        '<span class="fa fa-chevron-left"></span>',
        '<span class="fa fa-chevron-right"></span>'
      ],
      dots: false,
      responsive: {
        0:{
          items: 1
        },
        576: {
          items: 2
        },
        768:{
          items: 3
        },
        992:{
          items: 4
        }
      }
    });
  };

  // Retorna os objetos para serem adicionados à variável principal
  return {
    util: util,
    ProductCarousel: ProductCarousel
  };
}());

$(function() {

  // Previne o envio de todos os formulários com o atributo `data-prevent-submit`
  Array.prototype.forEach.call(
    document.querySelectorAll('form[data-prevent-submit]'),
    function(form) {
      form.addEventListener('submit', supply.util.preventEvent);
    }
  );
});
