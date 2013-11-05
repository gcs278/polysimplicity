<?php
/* @var $this CandidateController */
/* @var $model CandidateDemographics */

$this->breadcrumbs=array(
	'Candidate Management'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);


$this->menu=array(
	array('label'=>'View all Candidates', 'url'=>array('index')),
	array('label'=>'Create Candidates', 'url'=>array('create')),
	array('label'=>'View this Candidate', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Candidate <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
