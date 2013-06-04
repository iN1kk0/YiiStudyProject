<?php
/* @var $this FaqCatController */
/* @var $model FaqCat */

$this->breadcrumbs=array(
	'Faq Cats'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqCat', 'url'=>array('index')),
	array('label'=>'Create FaqCat', 'url'=>array('create')),
	array('label'=>'View FaqCat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaqCat', 'url'=>array('admin')),
);
?>

<h1>Update FaqCat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>