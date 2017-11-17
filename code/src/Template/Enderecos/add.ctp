<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Enderecos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Novo Endereco') ?></legend>
        <?php
            echo $this->Form->control('logradouro', ['class'=>'form-control']);
            echo $this->Form->control('numero', ['class'=>'form-control']);
            echo $this->Form->control('bairro', ['class'=>'form-control']);
            echo $this->Form->control('cidade', ['class'=>'form-control']);
            echo $this->Form->control('cep', ['class'=>'form-control']);
            echo $this->Form->control('complemento', ['class'=>'form-control']);
            echo $this->Form->control('estado', ['class'=>'form-control']);
            echo $this->Form->control('clientes._ids', ['options' => $clientes, 'class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
