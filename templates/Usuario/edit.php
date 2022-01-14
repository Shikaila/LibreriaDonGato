<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<title>Inicio</title>
<div class="row" style="margin-top: 5%;">
    <?php if ($this->request->getSession()->read("roles") === 1) : ?>
        <aside class="col-3">
            <div class="side-nav">
                <h4 class="heading">Acciones</h4>
                <?= $this->Form->postLink(
                    __('Eliminar'),
                    ['action' => 'delete', $usuario->idusuario],
                    ['confirm' => __('¿Estas seguro que lo quieres eliminar al usuario?', $usuario->idusuario), 'class' => 'side-nav-item']
                ) ?>
                <?= $this->Html->link(__('Volver hacia atras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
    <?php endif ?>
    <div class="col-6">
        <div class="usuario form content" style="text-align: left; background-color: #FA9983;">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <h1 style="padding-left: 2%; padding-bottom: 2%;">Editar Usuario</h1>
                <?php
                if ($this->request->getSession()->read("roles") === 1) {
                    echo $this->Form->control('roles', [
                        'label' => [
                            'text' => 'Roles',
                            "class" => "col-5",
                        ],
                        'options' => [
                            1 => 'Administrador',
                            2 => 'Usuario',
                        ]
                    ]);
                } else {
                    echo $this->Form->hidden('roles', [
                        'default' => 2
                    ]);
                }
                echo '</br>';
                echo $this->Form->control('nombre', [
                    'label' => [
                        'text' => 'Nombre',
                        "class" => "col-4",
                    ],
                    'placeholder' => 'Introduzca su nombre',
                ]);
                echo '</br>';
                echo $this->Form->control('apellidos', [
                    'label' => [
                        'text' => 'Apellidos',
                        "class" => "col-4",
                    ],
                    'placeholder' => 'Intoduzca sus Apellidos',

                ]);
                echo '</br>';
                echo $this->Form->control('direccion', [
                    'label' => [
                        'text' => 'Dirección',
                        "class" => "col-4",
                    ],
                    'placeholder' => 'Intoduzca su direccion',

                ]);
                echo '</br>';
                echo $this->Form->control('telefono', [
                    'label' => [
                        'text' => 'Número',
                        "class" => "col-4 ",
                    ],
                    'placeholder' => '000000000'
                ]);
                echo '</br>';

                echo $this->Form->control('correo', [
                    'label' => [
                        'text' => 'E-mail ',
                        "class" => "col-4 ",
                    ],
                    'placeholder' => 'ejemplo@gmail.com'
                ]);
                echo '</br>';
                echo $this->Form->control('contrasena', [
                    'label' => [
                        'text' => 'Contraseña',
                        "class" => "col-4",

                    ],
                    'placeholder' => 'Introduzca su contraseña',
                ]);
                echo '</br>';

                ?>
            </fieldset>
            <button type="submit" class="btn btn-dark" style="margin-left: 55%;"><i class="far fa-save"></i> Guardar </button>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>