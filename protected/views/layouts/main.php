<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this Controller 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

                <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/bxslider/jquery.bxslider.css" />

        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <?php Yii::app()->clientScript->registerScriptFile('/js/bxslider/jquery.bxslider.min.js'); ?>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <!--[if lt IE 7 ]>	<body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]>		<body class="ie ie7"> <![endif]-->
    <!--[if IE 8 ]>		<body class="ie ie8"> <![endif]-->
    <!--[if IE 9 ]>		<body class="ie ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

        <div id="container" class="homepage">
            <header>
                <div class="supernav">
                    <div class="frame clearfix">
                        <ul>
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page?view=industry">Industry Overview</a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>sitemap">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <?php $this->renderPartial('_menu', array()); ?>
                <?php echo $content; ?>
                <?php $this->renderPartial('_footer', array()); ?>
        </div>
        <!--<script src="js/script.js?v=1"></script>-->
        <!--[if lt IE 7 ]><script src="js/dd_belatedpng.js?v=1"></script><![endif]-->
    </body>
</html>
