<?php
/* @var $this ButtonsController */
/* @var $model Buttons */

$this->breadcrumbs=array(
	'Buttons'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Buttons', 'url'=>array('index')),
	array('label'=>'Create Buttons', 'url'=>array('create')),
	array('label'=>'View Buttons', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Buttons', 'url'=>array('admin')),
);
?>

<h1>Update Buttons <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>