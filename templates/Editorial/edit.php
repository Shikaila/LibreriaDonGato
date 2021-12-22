<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editorial $editorial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $editorial->ideditorial],
                ['confirm' => __('Are you sure you want to delete # {0}?', $editorial->ideditorial), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Editorial'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="editorial form content">
            <?= $this->Form->create($editorial) ?>
            <fieldset>
                <legend><?= __('Edit Editorial') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
