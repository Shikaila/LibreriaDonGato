<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor $autor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autor->idautor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autor->idautor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Autor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autor form content">
            <?= $this->Form->create($autor) ?>
            <fieldset>
                <legend><?= __('Edit Autor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
