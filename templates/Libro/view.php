<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libro $libro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Libro'), ['action' => 'edit', $libro->idlibro], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Libro'), ['action' => 'delete', $libro->idlibro], ['confirm' => __('Are you sure you want to delete # {0}?', $libro->idlibro), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Libro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Libro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="libro view content">
            <h3><?= h($libro->idlibro) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo Libro') ?></th>
                    <td><?= h($libro->titulo_libro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Isbn') ?></th>
                    <td><?= h($libro->isbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portada') ?></th>
                    <td><?= h($libro->portada) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idlibro') ?></th>
                    <td><?= $this->Number->format($libro->idlibro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Autor') ?></th>
                    <td><?= $this->Number->format($libro->id_autor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Editorial') ?></th>
                    <td><?= $this->Number->format($libro->id_editorial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($libro->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Paginas') ?></th>
                    <td><?= $this->Number->format($libro->numero_paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Publicacion') ?></th>
                    <td><?= h($libro->fecha_publicacion) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Resumen') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($libro->resumen)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Categoria') ?></h4>
                <?php if (!empty($libro->categoria)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Idcategoria') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($libro->categoria as $categoria) : ?>
                        <tr>
                            <td><?= h($categoria->idcategoria) ?></td>
                            <td><?= h($categoria->nombre) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categoria', 'action' => 'view', $categoria->idcategoria]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categoria', 'action' => 'edit', $categoria->idcategoria]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categoria', 'action' => 'delete', $categoria->idcategoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->idcategoria)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pedido') ?></h4>
                <?php if (!empty($libro->pedido)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Idpedido') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Direccion Envio') ?></th>
                            <th><?= __('Id Usuario') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($libro->pedido as $pedido) : ?>
                        <tr>
                            <td><?= h($pedido->idpedido) ?></td>
                            <td><?= h($pedido->fecha) ?></td>
                            <td><?= h($pedido->total) ?></td>
                            <td><?= h($pedido->direccion_envio) ?></td>
                            <td><?= h($pedido->id_usuario) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pedido', 'action' => 'view', $pedido->idpedido]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pedido', 'action' => 'edit', $pedido->idpedido]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedido', 'action' => 'delete', $pedido->idpedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->idpedido)]) ?>
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
