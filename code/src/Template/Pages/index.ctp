<?php
    $this->Html->css([
        '/vendor/owl-carousel/owl.carousel.min.css',
        '/vendor/owl-carousel/owl.theme.default.min.css',
        
        'home.css'
    ], ['block' => true]);

    $this->Html->script([
        '/vendor/owl-carousel/owl.carousel.min.js',

        'home.js'
    ], ['block' => true]);

    $this->append('app_templates', $this->element('zoom_modal'));
    $this->append('app_templates', $this->element('product_template'));
?>

<main>
    <section class="banner-section">
        <div class="container">
            <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#banner-carousel" data-slide-to="1"></li>
                    <li data-target="#banner-carousel" data-slide-to="2"></li>
                    <li data-target="#banner-carousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/banner/banner2.jpg" alt="Criamos experiências de compras fantásticas" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="/img/banner/banner3.jpg" alt="Slide 3" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="/img/banner/banner4.jpg" alt="Slide 4" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="/img/banner/banner5.jpg" alt="Slide 5" class="d-block w-100">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Slide anterior</span>
                </a>

                <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo slide</span>
                </a>
            </div>
        </div>
    </section>

    <section class="products-section">
        <div class="container">
            <div id="products-carousel" class="owl-carousel owl-theme"></div>
        </div>
    </section>
</main>
