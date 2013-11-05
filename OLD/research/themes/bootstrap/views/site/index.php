<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to the '.CHtml::encode(Yii::app()->name),
)); ?>
<style type="text/css">
        #center { text-align: center;margin-left: auto; margin-right: auto; display: block; padding-bottom: 20px;}
	.login { padding-top: 20px; padding-bottom: 20px; font-size: 40px;}
</style>


<p>This is the development site for politicalsimplicity.com</p>
<img src="images/VT.png" id="center">

<a href="./index.php?r=site/login" id="center" class="login">Contributor Login</a>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<?php $this->endWidget(); ?>
