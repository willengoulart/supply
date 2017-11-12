<?php
    $this->Html->script([
        '/vendor/jquery-mask/jquery.mask.min.js',

        'sign-up.js'
    ], ['block' => true]);
?>

<main class="container py-3">
    <h2>Cadastrar Cliente</h2>

    <form action="#" method="post" id="sign-up-form" novalidate>
        <fieldset>
            <legend>Dados da Empresa</legend>

            <div class="row">
                <div class="form-group col-12 col-md-4">
                    <label for="input-name">Nome <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="input-name" class="form-control" required>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="input-cnpj">CNPJ <span class="text-danger">*</span></label>
                    <input type="text" name="cnpj" id="input-cnpj" class="form-control" placeholder="__.___.___/____-__" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}" data-mask="00.000.000/0000-00" required>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="input-segment">Segmento</label>
                    <input type="text" name="segment" id="input-segment" class="form-control">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Dados de Contato</legend>

            <div class="row">
                <div class="form-group col-12 col-md-4">
                    <label for="input-email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="input-email" class="form-control" required>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="input-phone">Telefone</label>
                    <input type="phone" name="phone" id="input-phone" class="form-control" placeholder="(__) ____-____" pattern="\(\d{2}\) \d{4,5}-\d{4}" data-maskpattern="sp-phone">
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="input-cellphone">Celular</label>
                    <input type="phone" name="cellphone" id="input-cellphone" class="form-control" placeholder="(__) _____-____" pattern="\(\d{2}\) \d{4,5}-\d{4}" data-maskpattern="sp-phone">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>

            <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="input-street">Logradouro</label>
                    <input type="text" name="street" id="input-street" class="form-control">
                </div>

                <div class="form-group col-xs-12 col-md-2">
                    <label for="input-number">Número</label>
                    <input type="text" name="number" id="input-number" class="form-control" pattern="\d*">
                </div>

                <div class="form-group col-xs-12 col-md-4">
                    <label for="input-complement">Complemento</label>
                    <input type="text" name="complement" id="input-complement" class="form-control">
                </div>

                <div class="form-group col-xs-12 col-md-4">
                    <label for="input-zip">CEP</label>
                    <input type="text" name="zip" id="input-zip" class="form-control" placeholder="_____-___" pattern="\d{5}-\d{3}" data-mask="00000-000">
                </div>

                <div class="form-group col-xs-12 col-md-4">
                    <label for="input-city">Cidade</label>
                    <input type="text" name="city" id="input-city" class="form-control">
                </div>

                <div class="form-group col-xs-12 col-md-4">
                    <label for="input-state">Estado</label>
                    <select name="state" class="form-control custom-select" data-fill="states"></select>
                </div>
            </div>
        </fieldset>

        <div class="text-right">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>
</main>