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
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/services.jpg" alt="sitemap" />
            <div class="textsection">
                <table style="width:680px">
                    <tr>
                        <td>
                            <h1 class="pagetitle">Sitemap</h1>
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                                <li>Sitemap</li>
                            </ul>
                        </td>
                        <td>
                            <blockquote>
                                <div class="lalign"></div>
                            </blockquote>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</header>
<article>
    <div class="shadow">
        <div class="contentholder">
            <div class="shadowcontentholder clearfix">
                <div class="content">
                    <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                    <?php
                    foreach ($urls as $url):
                        $this->widget('zii.widgets.CMenu', array(
                            'items' => array(
                                array('label' => $url['title'], 'url' => array($url['url']))
                            ),
                        ));
                    endforeach;
                    ?>
                    <ul><li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page?view=about">About</li></ul>
                    <ul><li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page?view=industry">Industry Overview</li></ul>
                    <ul><li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page?view=whyus">Why Us</li></ul>
                </div>