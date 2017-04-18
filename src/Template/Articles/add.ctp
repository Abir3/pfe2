<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Html->script('ckeditor/ckeditor'); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('Id_user');
            echo $this->Form->control('Id_category');
            echo $this->Form->control('Id_section');
            echo $this->Form->control('Title');
            echo '<div class="input text required">';
            echo $this->Form->label('Article.Description');
            echo '</div>';
            echo $this->Form->textarea('Description',['rows'=>'5', 'cols'=>'5','class' => 'ckeditor']);
            echo '<div class="input text required">';
            echo $this->Form->label('Article.Contenu');
            echo '</div>';
            echo $this->Form->textarea('Content', ['rows' => '5', 'cols' => '5', 'id'=>'editor']);
            echo $this->Form->control('Image');
            echo $this->Form->control('Created');
            echo $this->Form->control('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<script>CKEDITOR.replace( 'editor' ); </script>

