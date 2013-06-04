<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<?php foreach ($banners as $banner): ?>
    <a href="<?php echo $banner->url; ?>" class="btn" style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/uploads/Buttons/<?php echo $banner->id; ?>/<?php echo $banner->image; ?>) no-repeat; width:181px; height: 42px;"><?php echo $banner->title; ?></a>
<?php endforeach; ?>