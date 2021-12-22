<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idusuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idusuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario view content">
            <h3><?= h($usuario->idusuario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($usuario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contraseña') ?></th>
                    <td><?= h($usuario->contraseña) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($usuario->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($usuario->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($usuario->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($usuario->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idusuario') ?></th>
                    <td><?= $this->Number->format($usuario->idusuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Roles') ?></th>
                    <td><?= $this->Number->format($usuario->roles) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
