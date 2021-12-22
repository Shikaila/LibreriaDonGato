<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libro[]|\Cake\Collection\CollectionInterface $libro
 */
?>
<div class="libro index content">
    <?= $this->Html->link(__('New Libro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Libro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idlibro') ?></th>
                    <th><?= $this->Paginator->sort('titulo_libro') ?></th>
                    <th><?= $this->Paginator->sort('isbn') ?></th>
                    <th><?= $this->Paginator->sort('id_autor') ?></th>
                    <th><?= $this->Paginator->sort('id_editorial') ?></th>
                    <th><?= $this->Paginator->sort('fecha_publicacion') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('numero_paginas') ?></th>
                    <th><?= $this->Paginator->sort('portada') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libro as $libro): ?>
                <tr>
                    <td><?= $this->Number->format($libro->idlibro) ?></td>
                    <td><?= h($libro->titulo_libro) ?></td>
                    <td><?= h($libro->isbn) ?></td>
                    <td><?= $this->Number->format($libro->id_autor) ?></td>
                    <td><?= $this->Number->format($libro->id_editorial) ?></td>
                    <td><?= h($libro->fecha_publicacion) ?></td>
                    <td><?= $this->Number->format($libro->precio) ?></td>
                    <td><?= $this->Number->format($libro->numero_paginas) ?></td>
                    <td><?= h($libro->portada) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $libro->idlibro]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $libro->idlibro]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $libro->idlibro], ['confirm' => __('Are you sure you want to delete # {0}?', $libro->idlibro)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
