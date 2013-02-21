<?php ?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Cake php assignment
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array(
        'bootstrap',
        'bootstrap.min',
        'custom'
    ));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="header">
        <?php echo $this->element('header'); ?>
    </div>
    <div id="content">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <?php echo $this->element('footer'); ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
