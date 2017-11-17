<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Categorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categorias form large-9 medium-8 columns content">
    <?= $this->Form->create($categoria) ?>
    <fieldset>
        <legend><?= __('Novo Categoria') ?></legend>
        <?php
            echo $this->Form->control('tipo', ['class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
