<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Html->script('ckeditor/ckeditor'); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Add News') ?></legend>
        <?php
            echo $this->Form->control('Id_user');
            echo $this->Form->control('Id_member');
            echo $this->Form->control('Title');
            echo $this->Form->textarea('Description', ['rows' => '5', 'cols' => '5','class' => 'ckeditor']);
            echo $this->Form->textarea('content', ['rows' => '10', 'cols' => '10', 'class' => 'ckeditor']);
            echo $this->Form->control('Image');
            echo $this->Form->control('Created');
            echo $this->Form->control('Modified');
        ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
