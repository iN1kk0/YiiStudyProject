<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<div class="mainbanner">
    <div class="shadow">
        <div class="bannerholder clearfix">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Pages/<?php echo $id; ?>/<?php echo $banner; ?>" alt="<?php echo $banner; ?>" />
            <div class="textsection">
                <table style="width:680px">
                    <tr>
                        <td>
                            <h1 class="pagetitle"><?php echo $title; ?></h1>
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                                <li><?php echo $title; ?></li>
                            </ul>
                        </td>
                        <td>
                            <blockquote>
                                <div class="lalign"><?php echo $quote; ?></div>
                            </blockquote>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
