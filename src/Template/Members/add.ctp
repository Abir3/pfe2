<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->control('Id_user');
            echo $this->Form->control('FirstName');
            echo $this->Form->control('LastName');
            echo $this->Form->control('Adress');
            echo $this->Form->control('E-mail');
            echo $this->Form->control('Password');
            echo $this->Form->control('Image');
            echo $this->Form->control('Telephone');
            echo $this->Form->control('Created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
