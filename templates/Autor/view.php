<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor $autor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Autor'), ['action' => 'edit', $autor->idautor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Autor'), ['action' => 'delete', $autor->idautor], ['confirm' => __('Are you sure you want to delete # {0}?', $autor->idautor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Autor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Autor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autor view content">
            <h3><?= h($autor->idautor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($autor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($autor->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idautor') ?></th>
                    <td><?= $this->Number->format($autor->idautor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
