edit 
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
                ['action' => 'delete', $article->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            echo $this->Form->input('Id_category', array('options' => $categories, 'default' => 'Select Categorie'));
            echo $this->Form->input('Id_section', array('options' => $sections, 'default' => 'Select Section'));
            echo $this->Form->control('Title');
            echo $this->Form->textarea('Description', ['rows' => '5', 'cols' => '5']);
            echo $this->Form->textarea('Content', ['rows' => '5', 'cols' => '5']);
            echo $this->Form->control('Image');
            echo $this->Form->control('Created');
            echo $this->Form->control('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
