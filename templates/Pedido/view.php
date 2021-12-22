<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->idpedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->idpedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->idpedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedido'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedido view content">
            <h3><?= h($pedido->idpedido) ?></h3>
            <table>
                <tr>
                    <th><?= __('Direccion Envio') ?></th>
                    <td><?= h($pedido->direccion_envio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idpedido') ?></th>
                    <td><?= $this->Number->format($pedido->idpedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($pedido->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($pedido->id_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($pedido->fecha) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Libro') ?></h4>
                <?php if (!empty($pedido->libro)) : ?>
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
                        <?php foreach ($pedido->libro as $libro) : ?>
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
