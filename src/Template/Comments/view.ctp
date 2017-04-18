<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments view large-9 medium-8 columns content">
    <h3><?= h($comment->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($comment->Id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Member') ?></th>
            <td><?= $this->Number->format($comment->Id_member) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Topic') ?></th>
            <td><?= $this->Number->format($comment->Id_topic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CommentNote') ?></th>
            <td><?= $this->Number->format($comment->CommentNote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($comment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($comment->modified) ?></td>
        </tr>
    </table>
</div>
