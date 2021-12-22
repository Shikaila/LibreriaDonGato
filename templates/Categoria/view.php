<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorium'), ['action' => 'edit', $categorium->idcategoria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorium'), ['action' => 'delete', $categorium->idcategoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->idcategoria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoria view content">
            <h3><?= h($categorium->idcategoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($categorium->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idcategoria') ?></th>
                    <td><?= $this->Number->format($categorium->idcategoria) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Libro') ?></h4>
                <?php if (!empty($categorium->libro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Idlibro') ?></th>
                            <th><?= __('Titulo Libro') ?></th>
                            <th><?= __('Isbn') ?></th>
                            <th><?= __('Id Autor') ?></th>
                            <th><?= __('Id Editorial') ?></th>
                            <th><?= __('Fecha Publicacion') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Numero Paginas') ?></th>
                            <th><?= __('Portada') ?></th>
                            <th><?= __('Resumen') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categorium->libro as $libro) : ?>
                        <tr>
                            <td><?= h($libro->idlibro) ?></td>
                            <td><?= h($libro->titulo_libro) ?></td>
                            <td><?= h($libro->isbn) ?></td>
                            <td><?= h($libro->id_autor) ?></td>
                            <td><?= h($libro->id_editorial) ?></td>
                            <td><?= h($libro->fecha_publicacion) ?></td>
                            <td><?= h($libro->precio) ?></td>
                            <td><?= h($libro->numero_paginas) ?></td>
                            <td><?= h($libro->portada) ?></td>
                            <td><?= h($libro->resumen) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Libro', 'action' => 'view', $libro->idlibro]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Libro', 'action' => 'edit', $libro->idlibro]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Libro', 'action' => 'delete', $libro->idlibro], ['confirm' => __('Are you sure you want to delete # {0}?', $libro->idlibro)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
