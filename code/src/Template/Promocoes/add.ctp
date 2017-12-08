<?php
/**
 * @var \App\Detalhes\AppDetalhes $this
 * @var \App\Model\Entity\Promoco $promoco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Promocoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="promocoes form large-9 medium-8 columns content">
    <?= $this->Form->create($promoco) ?>
    <fieldset>
        <legend><?= __('Novo Promoco') ?></legend>
        <?php
            echo $this->Form->control('preco', ['class'=>'form-control']);
            echo $this->Form->control('data_inicio', ['class'=>'form-control']);
            echo $this->Form->control('data_fim', ['class'=>'form-control']);
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
