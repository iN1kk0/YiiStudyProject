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
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contact.jpg" alt="services" />
            <div class="textsection">
                <table style="width:680px">
                    <tr>
                        <td>
                            <h1 class="pagetitle">Services</h1>
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                                <li>Services</li>
                            </ul>
                        </td>
                        <td>
                            <blockquote>
                                <div class="lalign">“our core value is that some mission statement or testimonial goes here in this area...”	</div>
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
                    <div class="contactbox">
                        <div class="imgsection"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contactman.png" alt="" /></div>
                        <div class="contacts">
                            <div class="title">Call us today!</div>
                            <dl>
                                <dt>Tel:</dt>
                                <dd>212.653.0840</dd>
                                <dt>Fax:</dt>
                                <dd>212.653.0844</dd>
                            </dl>
                            <div class="btnsection"><a href="contactus" class="btn contactus">contact us</a></div>
                        </div>
                    </div>
                    <div class="ohidden">

                        <?php
                        $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => $dataProvider,
                            'itemView' => '_services',
                            'ajaxUpdate' => false,
                            'template' => "{pager}<hr>\{items}\n<hr>{sorter}",
                            'pager' => array(
                                'class' => 'CListPager',
                            ),
                            'sorterHeader' => 'Sort by:',
                            'sortableAttributes' => array('title'),
                        ));
                        ?> 
                        <div class="service"></div>
                    </div>
                </div>

