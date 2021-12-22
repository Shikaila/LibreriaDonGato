<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 */
?>
<div class="usuario index content">
    <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idusuario') ?></th>
                    <th><?= $this->Paginator->sort('roles') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('contraseña') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->idusuario) ?></td>
                    <td><?= $this->Number->format($usuario->roles) ?></td>
                    <td><?= h($usuario->nombre) ?></td>
                    <td><?= h($usuario->contraseña) ?></td>
                    <td><?= h($usuario->direccion) ?></td>
                    <td><?= h($usuario->apellidos) ?></td>
                    <td><?= h($usuario->correo) ?></td>
                    <td><?= h($usuario->telefono) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->idusuario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->idusuario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->idusuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuario)]) ?>
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
