<div data-template="product" hidden>
    <article class="item product">
        <img src="#" alt="" class="product-img" data-fill="img_url" style="width: 170px; height: 150px;">

        <h3 class="product-name"><a href="#" data-fill="name">Name</a></h3>

        <p class="product-desc">
            <del class="old-price text-muted font-italic">De: <span data-fill="old_price"></span><br></del>
            <strong class="price">
            Por: <span class="font-italic" data-fill="price"></span>
            </strong><br>
            <span class="font-italic">
            ou <span class="font-weight-bold">até <span data-fill="installments"></span>X</span>
            de <span class="font-weight-bold" data-fill="valor_parcela"></span>
            </span>
        </p>

        <button class="btn btn-dark buy-btn">
            <span class="fa fa-shopping-cart mr-1" aria-hidden="true"></span>
           	<a href="#" data-fill="cart" style="color: white;">Comprar</a>
        </button>

        <p class="discount">Economize: <span data-fill="discount"></span></p>
    </article>
</div>