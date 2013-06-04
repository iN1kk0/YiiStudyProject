<?php
/* @var $this FaqItemsController */
/* @var $model FaqItems */

$this->breadcrumbs=array(
	'Faq Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqItems', 'url'=>array('index')),
	array('label'=>'Create FaqItems', 'url'=>array('create')),
	array('label'=>'View FaqItems', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaqItems', 'url'=>array('admin')),
);
?>

<h1>Update FaqItems <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>