<?php
/* @var $this CandidateDemographicsController */
/* @var $model CandidateDemographics */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
        'Candidate Management'=>array('index'),
	'Create Candidate'
);
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'candidate-demographics-demographics-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>
	<h1>Candidate Demographics</h>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'gender',array(
			'Male'=>'Male',
			'Female'=>'Female'),
		array('separator'=>'    '));?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>
	<h1>Place of Birth</h1>
	<div class="row">
		<div class="span-8">
			<?php echo $form->labelEx($model,'birth_town'); ?>
			<?php echo $form->textField($model,'birth_town'); ?>
			<?php echo $form->error($model,'birth_town'); ?>
		</div>
		<div class="span-10 last">	
			<?php echo $form->labelEx($model,'birth_state'); ?>
			<?php echo $form->textField($model,'birth_state'); ?>
			<?php echo $form->error($model,'birth_state'); ?>
		</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
