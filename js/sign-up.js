$(function() {

  // Cria as máscaras para telefones de São Paulo
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
  };

  $('[data-maskpattern=sp-phone]').mask(SPMaskBehavior, spOptions);

  // Preenche o `select` com os estados do Brasil
  document.querySelector('[data-fill=states]').innerHTML = statesList.reduce(function(html, state) {
    return html + '<option value="'+ state.id +'">'+ state.name +'</option>';
  }, '');

  // Valida o formulário
  document.getElementById('sign-up-form')
    .addEventListener('submit', function(e) {
      e.preventDefault();
      e.stopPropagation();

      this.classList.add('was-validated');

      if ( !this.checkValidity() ) return;

      // location.href = './urldesucesso.html';
    });
});
