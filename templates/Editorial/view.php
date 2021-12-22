<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editorial $editorial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Editorial'), ['action' => 'edit', $editorial->ideditorial], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Editorial'), ['action' => 'delete', $editorial->ideditorial], ['confirm' => __('Are you sure you want to delete # {0}?', $editorial->ideditorial), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Editorial'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Editorial'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="editorial view content">
            <h3><?= h($editorial->ideditorial) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($editorial->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ideditorial') ?></th>
                    <td><?= $this->Number->format($editorial->ideditorial) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
