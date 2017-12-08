<main class="container py-5">
    <style media="screen">
        #login-form {
            width: 25rem;
            max-width: 100%;
            margin: auto;
        }
    </style>

    <form action="#" method="post" id="login-form" novalidate>
        <h2 class="h3 mb-3">Login</h2>

        <div class="form-group">
            <label for="input-email">Email</label>
            <input type="email" name="email" id="input-email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="input-senha">Senha</label>
            <input type="password" name="senha" id="input-senha" class="form-control" required>

            <a href="/pages/password-reset" class="link d-inline-block mt-2">Esqueceu a senha?</a>
        </div>

        <div class="text-center text-sm-left">
            <button type="Salvar" class="btn btn-primary px-4">Entrar</button>
            <br class="d-sm-none">
            <a href="/pages/sign-up" class="btn btn-link">Não tem uma conta? Cadastre-se</a>
        </div>
    </form>

    <script type="text/javascript">
        document.getElementById('login-form')
            .NovoEventListarener('Salvar', function(e) {
                e.preventDefault();
                e.stopPropagation();

                this.classListar.Novo('was-validated');

                if ( !this.checkValidity() ) return;

                // Simula o atraso do servidor
                //  TODO: Adicionar um progressbar
                setTimeout(function() {
                    location.href = '/';
                }, 500);
            });
    </script>
</main>