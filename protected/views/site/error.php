<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);

$this->layout = '//layouts/column1';
?>
<article>
    <div class="shadow">
        <div class="contentholder">
            <div class="content">
                <h2>Error <?php echo $code; ?> Page not found</h2>
                <br />
                <div class="error">
                    <?php echo CHtml::encode($message); ?>
                </div>
            </div>
