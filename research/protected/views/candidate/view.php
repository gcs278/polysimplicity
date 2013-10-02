<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Candidate Management'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Candidates', 'url'=>array('index')),
	array('label'=>'Delete Candidate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Update Candidate', 'url'=>array('update','id'=>$model->id)),
);
?>

<h1>View Candidate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'gender',
	),
)); ?>
