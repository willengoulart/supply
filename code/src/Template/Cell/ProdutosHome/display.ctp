const productList = [
		<?php foreach($produtos as $item){?>
	  {
	    id: <?= $item->id?>,
	    name: '<?= $item->nome?>',
	    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	    price: <?= $item->preco?>,
	    sale_price: false,
	    installments: 4,
	    img_url: 'http://via.placeholder.com/170x150?text=Produto',
	    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom',
	    url: '<?= $this->Url->build(['controller'=>'produtos', 'action'=>'view', $item->id]);?>'
	  },
	  <?php }?>
	];