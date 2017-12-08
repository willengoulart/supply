<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Deseja apagar # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos Detalhes large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria Id') ?></th>
            <td><?= $this->Number->format($produto->categoria_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($produto->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QtdEstoque') ?></th>
            <td><?= $this->Number->format($produto->qtdEstoque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promocoes Id') ?></th>
            <td><?= $this->Number->format($produto->promocoes_id) ?></td>
        </tr>
    </table>
</div>
