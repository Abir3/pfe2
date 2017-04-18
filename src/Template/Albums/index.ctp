<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="albums index large-9 medium-8 columns content">
    <h3><?= __('Albums') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($albums as $album): ?>
            <tr>
                <td><?= $this->Number->format($album->Id) ?></td>
                <td><?= $this->Number->format($album->Id_user) ?></td>
                <td><?= h($album->Created) ?></td>
                <td><?= h($album->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $album->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $album->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $album->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
