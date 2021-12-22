<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario $comentario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comentario'), ['action' => 'edit', $comentario->idcomentario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comentario'), ['action' => 'delete', $comentario->idcomentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->idcomentario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comentario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comentario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentario view content">
            <h3><?= h($comentario->idcomentario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Idcomentario') ?></th>
                    <td><?= $this->Number->format($comentario->idcomentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($comentario->id_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Libro') ?></th>
                    <td><?= $this->Number->format($comentario->id_libro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valoracion') ?></th>
                    <td><?= $this->Number->format($comentario->valoracion) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Texto Comentario') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comentario->texto_comentario)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
