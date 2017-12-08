const productList = [
		<?php foreach($produtos as $item){?>
	  {
	    id: <?= $item->id?>,
	    name: '<?= $item->nome?>',
	    description: '<?= $item->descricao ?>',
	    price: <?= $item->preco?>,
	    sale_price: false,
	    installments: 4,
	    img_url: '<?= $this->Url->build('/'.$item->image, true)?>',
	    zoom_img_url: '<?= $this->Url->build('/'.$item->image, true)?>',
	    url: '<?= $this->Url->build(['controller'=>'produtos', 'action'=>'view', $item->id]);?>'
	  },
	  <?php }?>
	];