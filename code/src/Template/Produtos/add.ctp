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
    <?= $this->Form->create($produto, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Novo Produto') ?></legend>
        <?php
            echo $this->Form->control('categoria_id', ['class'=>'form-control']);
            echo $this->Form->control('nome', ['class'=>'form-control']);
            echo $this->Form->control('descricao', ['class'=>'form-control']);
            echo $this->Form->control('preco', ['class'=>'form-control']);
            echo $this->Form->control('qtdEstoque', ['class'=>'form-control']);
            echo $this->Form->control('img_arquivo', ['class'=>'form-control', 'type'=>'file', 'label'=>'Imagem (PNG apenas)']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
