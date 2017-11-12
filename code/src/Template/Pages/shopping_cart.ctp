<main class="container py-4">
    <h2 class="h3 mb-4">Carrinho de Compras <span class="fa fa-shopping-cart mr-1" aria-hidden="true"></span></h2>

    <table class="table table-responsive table-striped table-hover">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço unitário</th>
                <th>Preço total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="http://via.placeholder.com/50x50?text=Produto">
                    Lorem Ipsum (Neve)
                </td>
                <td><input type="number" value="1" class="form-control"></td>
                <td>R$79,92</td>
                <td>R$79,92</td>
                <td><a href="#" title="Remover do carrinho"><span class="fa fa-trash mr-1" aria-hidden="true"></span></a></td>
            </tr>

            <tr>
                <td>
                    <img src="http://via.placeholder.com/50x50?text=Produto">
                    Lorem Ipsum (Veja)
                </td>
                <td><input type="number" value="2" class="form-control"></td>
                <td>R$99,99</td>
                <td>R$199,98</td>
                <td><a href="#" title="Remover do carrinho"><span class="fa fa-trash mr-1" aria-hidden="true"></span></a></td>
            </tr>

            <tr>
                <td>
                    <img src="http://via.placeholder.com/50x50?text=Produto">
                    Lorem Ipsum (Ipẽ)
                </td>
                <td><input type="number" value="1" class="form-control"></td>
                <td>R$183,92</td>
                <td>R$183,92</td>
                <td><a href="#" title="Remover do carrinho"><span class="fa fa-trash mr-1" aria-hidden="true"></span></a></td>
            </tr>
        </tbody>
        <tfoot class="table-inverse">
            <tr>
                <td colspan="2"></td>
                <td>Total a comprar</td>
                <td>R$463,82</td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <div class="row">
        <div class="col-12 col-md-5 col-lg-4 col-xl-3">
            <div class="card p-3">
                <h3 class="h4">Cálculo do frete</h3>

                <div class="form-group">
                    <input type="text" name="zip" id="input-zip" class="form-control" placeholder="_____-___" pattern="\d{5}-\d{3}" data-mask="00000-000">
                </div>

                <p>Valor do Frete: <strong>R$ 15,00</strong></p>

                <p class="h5">Valor total da compra: R$478,82</p>

                <div class="toolbar">
                    <button class="btn btn-success">Ir para o pagamento</button>
                </div>
            </div>
    	</div>
    </div>

</main>