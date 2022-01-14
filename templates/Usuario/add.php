<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear cuenta</title>
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section">
            <div class="modal-content" style="background-color: #FA9983;">
                <div class="column-responsive column-80">
                    </br>
                    <?= $this->Form->create($usuario) ?>
                    <fieldset>
                        </br>
                        <legend><?= __('Crear cuenta') ?></legend>
                        <?php
                        if ($this->request->getSession()->read("roles") === 1) {
                            echo $this->Form->control('roles', [
                                'label' => [
                                    'text' => 'Roles del Usuario',
                                    "class" => "col-5",
                                    "padding-right"=> "50%;"
                                ],
                                'options' => [1 => 'Administrador',
                                 2 => 'Usuario',
                                 ]
                            ]);
                        } else {
                            echo $this->Form->hidden('roles', [
                                'default' => 2
                            ]);
                        }
                        echo $this->Form->control('nombre', [
                            'label' => [
                                'text' => 'Alias',
                                "class" => "col-4",
                            ],
                            'placeholder' => 'Introduzca su nombre',
                        ]);
                        echo $this->Form->control('apellidos', [
                            'label' => [
                                'text' => 'Apellidos',
                                "class" => "col-4",
                            ],
                            'placeholder' => 'Intoduzca sus Apellidos',

                        ]);
                        echo $this->Form->control('direccion', [
                            'label' => [
                                'text' => 'Dirección',
                                "class" => "col-4",
                            ],
                            'placeholder' => 'Intoduzca su direccion',

                        ]);
                        echo $this->Form->control('telefono', [
                            'label' => [
                                'text' => 'Número movil',
                                "class" => "col-4 ",
                            ],
                            'placeholder' => '000000000'
                        ]);
                        echo $this->Form->control('correo', [
                            'label' => [
                                'text' => 'Correo Registro ',
                                "class" => "col-4 ",
                            ],
                            'placeholder' => 'ejemplo@gmail.com'
                        ]);
                        echo 'Contraseña ';
                        echo $this->Form->password('contrasena', [
                            'placeholder' => 'Introduzca su contraseña',
                        ]);
                        ?>
                    </fieldset>
                    </br>
                    <button type="submit" class="btn btn-dark"><i class="far fa-save"></i> Crear usuario </button>
                    <?= $this->Form->end(); ?>
                    </br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>