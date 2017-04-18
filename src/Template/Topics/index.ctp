<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['action' => 'add']) ?></li>
         <li><?= $this->Html->link('Home Page', '/',array('target' => '_self')); ?></li> 

    </ul>
</nav>
<div class="topics index large-11 medium-10 columns content">
    <h3><?= __('Topics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_member') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Publish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topics as $topic): ?>
            <tr>
                <td><?= $this->Number->format($topic->Id) ?></td>
                <td><?= $this->Number->format($topic->Id_member) ?></td>
                <td><?= h($topic->Title) ?></td>
                <td><?= h($topic->Content) ?></td>
                <td><?= h($topic->Publish) ?></td>
                <td><?= h($topic->Created) ?></td>
                <td><?= h($topic->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $topic->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $topic->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $topic->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->Id)]) ?>
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
