<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_town')); ?>:</b>
	<?php echo CHtml::encode($data->birth_town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_state')); ?>:</b>
	<?php echo CHtml::encode($data->birth_state); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br /><br/>
	
</div>
