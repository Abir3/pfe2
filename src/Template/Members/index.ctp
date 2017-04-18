<?php
/**
  * @var \App\View\AppView $this
  */

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
         <li><?= $this->Html->link('Home Page', '/',array('target' => '_self')); ?></li> 

    </ul>
</nav>
<div class="members index large-9 medium-8 columns content">
    <h3><?= __('Members') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FirstName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Adress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('E-mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= $this->Number->format($member->Id) ?></td>
                <td><?= $this->Number->format($member->Id_user) ?></td>
                <td><?= h($member->FirstName) ?></td>
                <td><?= h($member->LastName) ?></td>
                <td><?= h($member->Adress) ?></td>
                <td><?= h($member->E-mail) ?></td>
                <td><?= h($member->Password) ?></td>
                <td><?= h($member->Image) ?></td>
                <td><?= $this->Number->format($member->Telephone) ?></td>
                <td><?= h($member->Created) ?></td>
                <td><?= h($member->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $member->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->Id)]) ?>
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
