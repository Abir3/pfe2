<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $topic->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $topic->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="topics form large-9 medium-8 columns content">
    <?= $this->Form->create($topic) ?>
    <fieldset>
        <legend><?= __('Edit Topic') ?></legend>
        <?php
            echo $this->Form->control('Id_member');
            echo $this->Form->control('Title');
            echo $this->Form->textarea('Content', ['rows' => '5', 'cols' => '5']);
            echo $this->Form->control('Publish');
            echo $this->Form->control('Created');
            echo $this->Form->control('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
