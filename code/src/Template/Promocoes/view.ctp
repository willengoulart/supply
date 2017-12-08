<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Promoco $promoco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Promoco'), ['action' => 'edit', $promoco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Promoco'), ['action' => 'delete', $promoco->id], ['confirm' => __('Deseja apagar # {0}?', $promoco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Promocoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Promoco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="promocoes Detalhes large-9 medium-8 columns content">
    <h3><?= h($promoco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($promoco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($promoco->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio') ?></th>
            <td><?= h($promoco->data_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Fim') ?></th>
            <td><?= h($promoco->data_fim) ?></td>
        </tr>
    </table>
</div>
