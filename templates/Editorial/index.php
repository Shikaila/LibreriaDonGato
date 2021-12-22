<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editorial[]|\Cake\Collection\CollectionInterface $editorial
 */
?>
<div class="editorial index content">
    <?= $this->Html->link(__('New Editorial'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Editorial') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ideditorial') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($editorial as $editorial): ?>
                <tr>
                    <td><?= $this->Number->format($editorial->ideditorial) ?></td>
                    <td><?= h($editorial->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $editorial->ideditorial]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $editorial->ideditorial]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $editorial->ideditorial], ['confirm' => __('Are you sure you want to delete # {0}?', $editorial->ideditorial)]) ?>
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
