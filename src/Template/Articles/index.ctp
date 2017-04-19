<?php
/**
  * @var \App\View\AppView $this
  */

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link('Home Page', '/',array('target' => '_self')); ?></li> 

    </ul>
</nav>
<div class="articles index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id_section') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->Id) ?></td>
                <td><?= $this->Number->format($article->Id_user) ?></td>
                <td><?= $this->Number->format($article->Id_category) ?></td>
                <td><?= $this->Number->format($article->Id_section) ?></td>
                <td><?= h($article->Title) ?></td>
                <td><?= h($article->Description) ?></td>
                <td><?= $this->Html->image('uploads/'.$article->Image, array('alt' => 'CakePHP', 'border' => '0')); ?></td>
                <td><?= h($article->Created) ?></td>
                <td><?= h($article->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->Id)]) ?>
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
