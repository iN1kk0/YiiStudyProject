<?php
/* @var $this ButtonsController */
/* @var $model Buttons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buttons-form',
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
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'url'); ?>
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
		<?php echo $form->labelEx($model,'Banners_id'); ?>
		<?php
                echo $form->dropDownList($model,'Banners_id', 
                Banners::getAllBanners(),
                array('empty' => '(Select banner)')
                );?> 
		<?php echo $form->error($model,'Banners_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->