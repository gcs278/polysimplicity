<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<style type="text/css">
	#center { margin-left: auto; margin-right: auto; display: block; padding-bottom: 20px;}
</style>
<?php include_once("analyticstracking.php") ?>
<h1>Welcome to the <i><?php echo CHtml::encode(Yii::app()->name); ?>!</i></h1>

<p>This is the development site for politicalsimplicity.com</p>
<img src="VT.png" id="center">

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
