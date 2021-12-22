<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 * @var \Cake\Collection\CollectionInterface|string[] $libro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoria form content">
            <?= $this->Form->create($categorium) ?>
            <fieldset>
                <legend><?= __('Add Categorium') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('libro._ids', ['options' => $libro]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
