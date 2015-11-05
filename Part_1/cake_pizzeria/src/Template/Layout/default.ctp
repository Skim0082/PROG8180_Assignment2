<?php

$cakeDescription = 'Assignment 1 - Conestoga Pizzeria';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('script.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <footer>
        <div class="BottomLine"></div>
        <div class="bottom-title">
            <div class="col-sm-9 bottom-left">Pizzeria &copy; 2015 / Web Technologies - SungJoe KIM</div>
            <div class="col-sm-3">
                <ul id="menulist">
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/pizzeria/img/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/pizzeria/img/twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/pizzeria/img/youtube.png" alt="You Tube"></a>
                    </li>
                </ul>
            </div>
        </div>		
    </footer>	
</body>
</html>