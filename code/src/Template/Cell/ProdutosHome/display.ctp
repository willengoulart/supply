const productList = [
		<?php foreach($produtos as $item){?>
	  {
	    id: <?= $item->id?>,
	    name: '<?= $item->nome?>',
	    description: '<?= $item->descricao ?>',
	    price: <?= $item->preco?>,
	    sale_price: false,
	    installments: 4,
	    img_url: 'http://via.placeholder.com/170x150?text=Produto',
	    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom',
	    url: '<?= $this->Url->build(['controller'=>'produtos', 'action'=>'view', $item->id]);?>'
	  },
	  <?php }?>
	];