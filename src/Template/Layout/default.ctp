
<!DOCTYPE>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
       <!-- <ul class="title-area large-4 medium-4 columns">
            <li class="name">
                <h1><a href="">< //$this->fetch('title') ?></a></h1>
            </li>
        </ul>-->
        <div class="top-bar-section">
            <ul class="center">
                <li><a> BIENVENU </a></li>
                <li><a></a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    
    <div class="container clearfix">
            <?php if(isset($tables)){ ?>
            <nav class="large-3 medium-6 columns" id="actions-sidebar">

                <ul class="side-nav">
                
                    <?php foreach ($tables as $index => $table): ?>
                        <li >
                               <?= $this->Html->link(
                                       '<b>'. $table.'</b>',
                                        '/'.$table,['escape'=>false]
                                    ); ?>
                            </li>
                            <ul>
                                <li>
                                <?= $this->Html->link(
                                        'Ajouter '.$table,
                                        '/'.$table.'/add',['escape'=>false]
                                    ); ?>
                                </li>
                            </ul>

                        
                        <?php endforeach; ?>
                         
                </ul>
            </nav>
            <?php }; ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
