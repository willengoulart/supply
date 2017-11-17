<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Novo Produto') ?></legend>
        <?php
            echo $this->Form->control('categoria_id', ['class'=>'form-control']);
            echo $this->Form->control('nome', ['class'=>'form-control']);
            echo $this->Form->control('preco', ['class'=>'form-control']);
            echo $this->Form->control('qtdEstoque', ['class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
