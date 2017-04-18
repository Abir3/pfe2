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
                ['action' => 'delete', $logo->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logo->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Logos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logos form large-9 medium-8 columns content">
    <?= $this->Form->create($logo) ?>
    <fieldset>
        <legend><?= __('Edit Logo') ?></legend>
        <?php
            echo $this->Form->control('Id_user');
            echo $this->Form->control('Image');
            echo $this->Form->control('Created');
            echo $this->Form->control('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
