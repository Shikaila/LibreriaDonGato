<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libro $libro
 * @var string[]|\Cake\Collection\CollectionInterface $categoria
 * @var string[]|\Cake\Collection\CollectionInterface $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $libro->idlibro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $libro->idlibro), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Libro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="libro form content">
            <?= $this->Form->create($libro) ?>
            <fieldset>
                <legend><?= __('Edit Libro') ?></legend>
                <?php
                    echo $this->Form->control('titulo_libro');
                    echo $this->Form->control('isbn');
                    echo $this->Form->control('id_autor');
                    echo $this->Form->control('id_editorial');
                    echo $this->Form->control('fecha_publicacion', ['empty' => true]);
                    echo $this->Form->control('precio');
                    echo $this->Form->control('numero_paginas');
                    echo $this->Form->control('portada');
                    echo $this->Form->control('resumen');
                    echo $this->Form->control('categoria._ids', ['options' => $categoria]);
                    echo $this->Form->control('pedido._ids', ['options' => $pedido]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
