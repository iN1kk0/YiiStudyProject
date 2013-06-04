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
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/services.jpg" alt="faq" />
            <div class="textsection">
                <table style="width:680px">
                    <tr>
                        <td>
                            <h1 class="pagetitle">Faq</h1>
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                                <li>Faq</li>
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
                    <?php
                    foreach ($faqcats as $faqcat):
                        $this->widget('zii.widgets.jui.CJuiAccordion', array(
                            'panels' => array(
                                $faqcat->title => $this->renderPartial('_faq', array(
                                    'faqcats' => $faqcat->faqItems,
                                        ), true),
                            ),
                            // additional javascript options for the accordion plugin
                            'options' => array(
                                'animated' => 'bounceslide',
                                'collapsible' => true,
                                'active' => true,
                            ),
                            'htmlOptions' => array(
                                'style' => 'width:400px; margin:10px'
                            ),
                        ));
                    endforeach;
                    ?>
                </div>