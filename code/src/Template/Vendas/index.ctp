<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Venda[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Novo Venda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpNovoing="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_transacao') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $this->Number->format($venda->id) ?></td>
                <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
                <td><?= $venda->has('endereco') ? $this->Html->link($venda->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $venda->endereco->id]) : '' ?></td>
                <td><?= $this->Number->format($venda->valor_total) ?></td>
                <td><?= h($venda->date) ?></td>
                <td><?= h($venda->codigo_transacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Deseja apagar # {0}?', $venda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}}')]) ?></p>
    </div>
</div>
