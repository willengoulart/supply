<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Deseja apagar # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes Detalhes large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($cliente->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($cliente->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vendas') ?></h4>
        <?php if (!empty($cliente->vendas)): ?>
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
            <?php foreach ($cliente->vendas as $vendas): ?>
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
        <h4><?= __('Related Enderecos') ?></h4>
        <?php if (!empty($cliente->enderecos)): ?>
        <table cellpNovoing="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Logradouro') ?></th>
                <th scope="col"><?= __('Numero') ?></th>
                <th scope="col"><?= __('Bairro') ?></th>
                <th scope="col"><?= __('Cidade') ?></th>
                <th scope="col"><?= __('Cep') ?></th>
                <th scope="col"><?= __('Complemento') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($cliente->enderecos as $enderecos): ?>
            <tr>
                <td><?= h($enderecos->id) ?></td>
                <td><?= h($enderecos->logradouro) ?></td>
                <td><?= h($enderecos->numero) ?></td>
                <td><?= h($enderecos->bairro) ?></td>
                <td><?= h($enderecos->cidade) ?></td>
                <td><?= h($enderecos->cep) ?></td>
                <td><?= h($enderecos->complemento) ?></td>
                <td><?= h($enderecos->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Deseja apagar # {0}?', $enderecos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
