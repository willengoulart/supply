<?php
    $this->Html->css('product-details.css', ['block' => true]);

    $this->Html->script('product-details.js', ['block' => true]);
?>

<main class="container">
    <p id="not-found-message" class="h3 my-5 d-none">Produto não encontrado.</p>

    <article id="product-details" class="full-product">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <img src="#" alt="" class="product-img" data-fill="img_url">
            </div>

            <div class="col-12 col-md-6 mb-3 mt-lg-4">
                <h2 class="product-name" data-fill="name"></h2>

                <p>
                    <del class="product-old-price text-muted font-italic">De: <span data-fill="old_price">R$99,99</span><br></del>
                    <span class="product-price" data-fill="price">R$14,90</span>
                </p>

                <button type="button" class="btn btn-primary">
                    <span class="fa fa-shopping-cart mr-1" aria-hidden="true"></span>
                    Comprar
                </button>
            </div>
        </div>

        <p data-fill="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
</main>