<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Endereco'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Deseja apagar # {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecos Detalhes large-9 medium-8 columns content">
    <h3><?= h($endereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($endereco->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($endereco->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($endereco->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($endereco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($endereco->numero) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vendas') ?></h4>
        <?php if (!empty($endereco->vendas)): ?>
        <table cellpNovoing="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Endereco Id') ?></th>
                <th scope="col"><?= __('Valor Total') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Codigo Transacao') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($endereco->vendas as $vendas): ?>
            <tr>
                <td><?= h($vendas->id) ?></td>
                <td><?= h($vendas->cliente_id) ?></td>
                <td><?= h($vendas->endereco_id) ?></td>
                <td><?= h($vendas->valor_total) ?></td>
                <td><?= h($vendas->date) ?></td>
                <td><?= h($vendas->codigo_transacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Deseja apagar # {0}?', $vendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($endereco->clientes)): ?>
        <table cellpNovoing="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cnpj') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Senha') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($endereco->clientes as $clientes): ?>
            <tr>
                <td><?= h($clientes->id) ?></td>
                <td><?= h($clientes->cnpj) ?></td>
                <td><?= h($clientes->nome) ?></td>
                <td><?= h($clientes->email) ?></td>
                <td><?= h($clientes->senha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Deseja apagar # {0}?', $clientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
