<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 * @var \Cake\Collection\CollectionInterface|string[] $libro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pedido'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedido form content">
            <?= $this->Form->create($pedido) ?>
            <fieldset>
                <legend><?= __('Add Pedido') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('total');
                    echo $this->Form->control('direccion_envio');
                    echo $this->Form->control('id_usuario');
                    echo $this->Form->control('libro._ids', ['options' => $libro]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
