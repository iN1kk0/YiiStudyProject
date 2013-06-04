<?php
/* @var $this BlocksController */
/* @var $model Blocks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blocks-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php foreach(Yii::app()->user->getFlashes() as $key => $message) {
                    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
              } 
        ?>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>-->
        
        <div class="row">
                <?php echo $form->labelEx($model,'image'); ?>
                <?php echo CHtml::activeFileField($model, 'image'); ?>
                <?php echo $form->error($model,'image'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonUrl'); ?>
		<?php echo $form->textField($model,'buttonUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'buttonUrl'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'buttonImage'); ?>
		<?php echo $form->textField($model,'buttonImage',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'buttonImage'); ?>
	</div>-->
        
        <div class="row">
                <?php echo $form->labelEx($model,'buttonImage'); ?>
                <?php echo CHtml::activeFileField($model, 'buttonImage'); ?>
                <?php echo $form->error($model,'buttonImage'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonTitle'); ?>
		<?php echo $form->textField($model,'buttonTitle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'buttonTitle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->