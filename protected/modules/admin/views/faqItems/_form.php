<?php
/* @var $this FaqItemsController */
/* @var $model FaqItems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faq-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textField($model,'question',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textArea($model,'answer',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'FaqCat_id'); ?>
		<?php echo $form->textField($model,'FaqCat_id'); ?>
		<?php echo $form->error($model,'FaqCat_id'); ?>
	</div>-->
        
        <div class="row">
		<?php echo $form->labelEx($model,'FaqCat_id'); ?>
		<?php
                echo $form->dropDownList($model,'FaqCat_id', 
                FaqCat::getAllCategory(),
                array('empty' => '(Select a category)')
                );?>
		<?php echo $form->error($model,'FaqCat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isActive'); ?>
		<?php echo $form->checkBox($model,'isActive'); ?>
		<?php echo $form->error($model,'isActive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->