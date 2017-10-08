(function() {
  'use strict';

  /**
   *  Preenche um elemento com os dados fornecidos.
   *
   *  @param {HTMLElement}  elem - Elemento em questão.
   *  @param {Object}       data - Dados para o preenchimento.
   *
   *  TODO: Integrar com o algoritmo presente em app.js e mover para um lugar adequado.
   */
  supply.util.fillData = function(elem, data) {

    // NOTE: Caso genérico está em app.js
    // Preenche o `select` com os estados do Brasil
    elem.innerHTML = data.reduce(function(html, state) {
      return html + '<option value="'+ state.id +'">'+ state.name +'</option>';
    }, '');
  };

}());

$(function() {
  supply.util.fillData( document.querySelector('[data-fill=states]'), statesList );

  // Exemplo de chamada após a integração:
  // supply.util.fillData( document.querySelector('[data-fill=states]'), statesList, {
  //   states: function(states) {
  //     this.innerHTML = states.reduce(function(html, state) {
  //       return html + '<option value="'+ state.id +'">'+ state.name +'</option>';
  //     }, '');
  //
  //     return false;
  //   }
  // });

  // TODO: Fazer a validação de formulário
});
