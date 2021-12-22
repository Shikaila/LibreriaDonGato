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
            <?= $this->Html->link(__('List Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Add Usuario') ?></legend>
                <?php
                    echo $this->Form->control('roles');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('contraseña');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('telefono');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
