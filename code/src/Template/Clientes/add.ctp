<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Novo Cliente') ?></legend>
        <?php
            echo $this->Form->control('cnpj', ['class'=>'form-control']);
            echo $this->Form->control('nome', ['class'=>'form-control']);
            echo $this->Form->control('email', ['class'=>'form-control']);
            echo $this->Form->control('senha', ['class'=>'form-control']);
            echo $this->Form->control('enderecos._ids', ['options' => $enderecos, 'class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
