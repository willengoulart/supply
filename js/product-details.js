(function() {
  'use strict';

  // TODO: Melhorar esse arquivo inteiro peloAmordeDeus #GambiarraPraAcelerar

  /**
   *  Identifica o produto desejado pela URL.
   *
   *  @returns {String} - O ID do produta.
   *
   *  TODO: Melhorar esse algoritmo peloAmordeDeus
   */
  function getProductId() {
    try {
      return location.search.substring(1).split('&').map(function(arr) {
        return arr.split('=');
      }).filter(function(arr) {
        return arr[0] == 'productId';
      })[0][1];

    } catch(e) {
      return false;
    }
  }

  /**
   *  Busca o produto na array.
   *
   *  @param {String} id - ID do produto desejado.
   *
   *  @returns {Object} - Os dados do produto.
   */
  function getProductById(id) {
    return productList.filter(function(prod) {
      return prod.id == id;
    })[0];
  }

  function fillProductDetails() {
    var product = getProductById( getProductId() );

    if (!product) {
      document.getElementById('not-found-message').classList.remove('d-none');
      document.getElementById('product-details').classList.add('d-none');
      return;
    }

    var specialCases = {
      img_url: function(url) {
        this.src = url;
        return false;
      },
      old_price: function () {
        if (product.sale_price) {
          this.textContent = supply.util.numberToCurrency( product.price );
        } else {
          this.parentNode.style.display = 'none';
        }

        return false;
      },
      price: function() {
        this.textContent = supply.util.numberToCurrency( product.sale_price || product.price );
        return false;
      }
    };

    Array.prototype.forEach.call(
      document.querySelectorAll('#product-details [data-fill]'),
      function(el) {
        el.getAttribute('data-fill').split(' ').forEach(function(key) {
          if (
            // Checa se uma função especial foi definida;
            typeof specialCases[key] == 'function' &&
            // Se a função retornar `false`, parte para a próxima iteração;
            specialCases[key].call( el, product[key] ) === false

          ) return;

          // Se as outras condições não forem atendidas e existirem dados no objeto,
          //  faz as devidas alterações ao HTML.
          if (typeof product[key] !== 'undefined') el.innerHTML = product[key];
        });
      }
    );
  }

  $(function() {
    fillProductDetails();
    // supply.util.fillData(
    //   document.querySelector(''),
    //   getProductById( getProductId() )
    // );
  });
}());
