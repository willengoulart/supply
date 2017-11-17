<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Deseja apagar # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias Detalhes large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($categoria->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= $categoria->has('produto') ? $this->Html->link($categoria->produto->id, ['controller' => 'Produtos', 'action' => 'view', $categoria->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
    </table>
</div>
