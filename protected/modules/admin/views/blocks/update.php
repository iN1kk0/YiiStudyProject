<?php
/* @var $this BlocksController */
/* @var $model Blocks */

$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Blocks', 'url'=>array('index')),
	array('label'=>'Create Blocks', 'url'=>array('create')),
	array('label'=>'View Blocks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Blocks', 'url'=>array('admin')),
);
?>

<h1>Update Blocks <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>