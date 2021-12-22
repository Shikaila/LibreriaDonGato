<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario $comentario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comentario->idcomentario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->idcomentario), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comentario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentario form content">
            <?= $this->Form->create($comentario) ?>
            <fieldset>
                <legend><?= __('Edit Comentario') ?></legend>
                <?php
                    echo $this->Form->control('id_usuario');
                    echo $this->Form->control('id_libro');
                    echo $this->Form->control('texto_comentario');
                    echo $this->Form->control('valoracion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
