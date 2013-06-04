<?php
/* @var $this ButtonsController */
/* @var $model Buttons */

$this->breadcrumbs=array(
	'Buttons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buttons', 'url'=>array('index')),
	array('label'=>'Manage Buttons', 'url'=>array('admin')),
);
?>

<h1>Create Buttons</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>