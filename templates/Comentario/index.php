<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario[]|\Cake\Collection\CollectionInterface $comentario
 */
?>
<div class="comentario index content">
    <?= $this->Html->link(__('New Comentario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idcomentario') ?></th>
                    <th><?= $this->Paginator->sort('id_usuario') ?></th>
                    <th><?= $this->Paginator->sort('id_libro') ?></th>
                    <th><?= $this->Paginator->sort('valoracion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentario as $comentario): ?>
                <tr>
                    <td><?= $this->Number->format($comentario->idcomentario) ?></td>
                    <td><?= $this->Number->format($comentario->id_usuario) ?></td>
                    <td><?= $this->Number->format($comentario->id_libro) ?></td>
                    <td><?= $this->Number->format($comentario->valoracion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comentario->idcomentario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comentario->idcomentario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentario->idcomentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->idcomentario)]) ?>
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
