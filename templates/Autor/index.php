<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor[]|\Cake\Collection\CollectionInterface $autor
 */
?>
<div class="autor index content">
    <?= $this->Html->link(__('New Autor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Autor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idautor') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autor as $autor): ?>
                <tr>
                    <td><?= $this->Number->format($autor->idautor) ?></td>
                    <td><?= h($autor->nombre) ?></td>
                    <td><?= h($autor->apellidos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $autor->idautor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autor->idautor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autor->idautor], ['confirm' => __('Are you sure you want to delete # {0}?', $autor->idautor)]) ?>
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
