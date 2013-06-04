<?php
/* @var $this FaqItemsController */
/* @var $data FaqItems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FaqCat_id')); ?>:</b>
	<?php echo CHtml::encode($data->FaqCat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isActive')); ?>:</b>
	<?php echo CHtml::encode($data->isActive); ?>
	<br />


</div>