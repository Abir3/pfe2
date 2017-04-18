<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['action' => 'add']) ?></li>
         <li><?= $this->Html->link('Home Page', '/',array('target' => '_self')); ?></li> 

    </ul>
</nav>
<div class="photos index large-9 medium-8 columns content">
    <h3><?= __('Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_album') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photos as $photo): ?>
            <tr>
                <td><?= $this->Number->format($photo->Id) ?></td>
                <td><?= $this->Number->format($photo->Id_album) ?></td>
                <td><?= h($photo->Image) ?></td>
                <td><?= h($photo->Created) ?></td>
                <td><?= h($photo->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $photo->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photo->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photo->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->Id)]) ?>
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
