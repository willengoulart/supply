<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Promoco[]|\Cake\Collection\CollectionInterface $promocoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Novo Promoco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="promocoes index large-9 medium-8 columns content">
    <h3><?= __('Promocoes') ?></h3>
    <table cellpNovoing="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_fim') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promocoes as $promoco): ?>
            <tr>
                <td><?= $this->Number->format($promoco->id) ?></td>
                <td><?= $this->Number->format($promoco->preco) ?></td>
                <td><?= h($promoco->data_inicio) ?></td>
                <td><?= h($promoco->data_fim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $promoco->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $promoco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $promoco->id], ['confirm' => __('Deseja apagar # {0}?', $promoco->id)]) ?>
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
