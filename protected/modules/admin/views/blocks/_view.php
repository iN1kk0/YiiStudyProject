<?php
/* @var $this BlocksController */
/* @var $data Blocks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buttonUrl')); ?>:</b>
	<?php echo CHtml::encode($data->buttonUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buttonImage')); ?>:</b>
	<?php echo CHtml::encode($data->buttonImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buttonTitle')); ?>:</b>
	<?php echo CHtml::encode($data->buttonTitle); ?>
	<br />


</div>