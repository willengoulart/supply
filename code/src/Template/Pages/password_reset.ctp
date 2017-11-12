<main class="container py-4">
    <style media="screen">
        #password-reset-form {
            width: 25rem;
            max-width: 100%;
            margin: 1.5rem auto;
        }
    </style>

    <div id="success-alert" class="alert alert-success d-none" role="alert">
        <p class="h4 alert-heading">Senha redefinida com sucesso!</p>
        <p class="mb-0">
            Um link com a nova senha foi enviado para o seu email.
            <br class="d-md-none">
            <a href="/" class="alert-link">Voltar para a home.</a>
        </p>
    </div>

    <form action="#" method="post" id="password-reset-form" novalidate>
        <h2 class="h3 mb-3">Esqueci minha senha</h2>

        <div class="form-group">
            <label for="input-email">Email</label>
            <input type="email" name="email" id="input-email" class="form-control" required>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Redefinir senha</button>
        </div>
    </form>

    <script type="text/javascript">
        document.getElementById('password-reset-form')
            .addEventListener('submit', function(e) {
                e.preventDefault();
                e.stopPropagation();

                this.classList.add('was-validated');

                if ( !this.checkValidity() ) return;

                // Simula o delay do servidor
                setTimeout(function() {
                    document.getElementById('success-alert').classList.remove('d-none');
                }, 500);
            });
    </script>
</main>