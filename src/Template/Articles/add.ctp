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
    <?= $this->Form->create($article,array('enctype'=>'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->input('Id_category', array('options' => $categories, 'default' => 'Select Categorie'));
            echo $this->Form->input('Id_section', array('options' => $sections, 'default' => 'Select Section'));
            echo $this->Form->control('Title');
            echo '<div class="input text required">';
            echo $this->Form->label('Article.Description');
            echo '</div>';
            echo $this->Form->textarea('Description',['rows'=>'5', 'cols'=>'5','class' => 'ckeditor']);
            echo '<div class="input text required">';
            echo $this->Form->label('Article.Contenu');
            echo '</div>';
            echo $this->Form->textarea('Content', ['rows' => '5', 'cols' => '5', 'id'=>'editor']);
            echo $this->Form->input('Image', array('type'=>'file'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<script>CKEDITOR.replace( 'editor' ); </script>

