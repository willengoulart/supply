<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Novo Venda') ?></legend>
        <?php
            echo $this->Form->control('cliente_id', ['options' => $clientes, 'class'=>'form-control']);
            echo $this->Form->control('endereco_id', ['options' => $enderecos, 'class'=>'form-control']);
            echo $this->Form->control('valor_total', ['class'=>'form-control']);
            echo $this->Form->control('date', ['class'=>'form-control']);
            echo $this->Form->control('codigo_transacao', ['class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
