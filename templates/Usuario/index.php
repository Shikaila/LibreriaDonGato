<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Usuarios</title>
</head>

<body>
    <div class="usuario index content" style="margin-top: 5%; background-color: #FA9983;">
        <h3>Usuarios</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr class="container">
                        <th class="col-2"><?= $this->Paginator->sort('nombre') ?></th>
                        <th class="col-2"><?= $this->Paginator->sort('apellidos') ?></th>
                        <th class="col-2"><?= $this->Paginator->sort('correo') ?></th>
                        <th class="col-2"><?= $this->Paginator->sort('telefono') ?></th>
                        <th class="actions col-2"><?= 'Acción' ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuario as $usuario) : ?>
                        <tr>
                            <td class="col-2"><?= h($usuario->nombre) ?></td>
                            <td class="col-2"><?= h($usuario->apellidos) ?></td>
                            <td class="col-2"><?= h($usuario->correo) ?></td>
                            <td class="col-2"><?= h($usuario->telefono) ?></td>
                            <td class="actions col-2">
                                <i class="fas fa-user-edit"></i><?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->idusuario]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>