<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Deseja apagar # {0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Venda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas Detalhes large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= $venda->has('endereco') ? $this->Html->link($venda->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $venda->endereco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Transacao') ?></th>
            <td><?= h($venda->codigo_transacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($venda->valor_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($venda->date) ?></td>
        </tr>
    </table>
</div>
