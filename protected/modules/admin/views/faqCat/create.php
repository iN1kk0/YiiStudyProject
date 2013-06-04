<?php
/* @var $this FaqCatController */
/* @var $model FaqCat */

$this->breadcrumbs=array(
	'Faq Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaqCat', 'url'=>array('index')),
	array('label'=>'Manage FaqCat', 'url'=>array('admin')),
);
?>

<h1>Create FaqCat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>