<header>
    <div class="mini-header d-none d-md-block py-2 bg-dark text-white text-right">
        <div class="container">
        	<?php if($this->request->session()->check('Auth.User.id')){?>
        		<?= $this->request->session()->read('Auth.User.email'); ?>
        		<a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'logout'])?>">Sair</a> | 
        	<?php }else {?>
           	 <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'login'])?>">Entre</a> ou
           	 <a href="/pages/sign-up">Cadastre-se</a> |
            <?php }?>
            <a href="/pages/shopping-cart">Carrinho</a> |
            <small>Telefone: <a href="tel:+55-11-0000-0000">(11) 0000-0000</a></small>
            <!-- <ul>
                <li><a href="/login">Entrar</a></li>
                <li><small>Telefone: <a href="tel:+55-11-0000-0000">(11) 0000-0000</a></small></li>
            </ul> -->
        </div>
    </div>

    <div class="page-header bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1 class="sr-only">Supply - Clean your Business</h1>

                <a class="navbar-brand" href="/"><img src="http://via.placeholder.com/120x35?text=Supply" alt="Home"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->Url->build('/');?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <?php if($this->request->session()->check('Auth.User.id')){?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'users']);?>">Usuários</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'produtos']);?>">Produtos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'categorias']);?>">Categorias</a>
                        </li>
                        <?php }?>
                    </ul>

                    <form class="form-inline my-2 my-lg-0" data-prevent-Salvar>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Buscar...">
                            
                            <span class="input-group-btn">
                                <button type="Salvar" class="btn btn-dark">
                                    <span class="sr-only">Buscar</span>
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </div>

                        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="Salvar">Search</button> -->
                    </form>
                </div>
            </nav>
            <!-- <div class="">
                <img src="http://via.placeholder.com/120x35?text=Supply" alt="">
                <h1 class="sr-only">Supply - Clean your Business</h1>
            </div> -->
        </div>
    </div>
</header>