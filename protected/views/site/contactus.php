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
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contact.jpg" alt="contact us" />
            <div class="textsection">
                <table style="width:680px">
                    <tr>
                        <td>
                            <h1 class="pagetitle">Contact Us</h1>
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->HomeUrl; ?>">Home</a></li>
                                <li>Contact Us</li>
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
                    <div class="map">
                        <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=330+Madison+Avenue+New+York,+NY+10017&aq=&sll=33.090505,-96.842637&sspn=0.00738,0.013937&ie=UTF8&hq=&hnear=330+Madison+Ave,+New+York,+10017&z=17" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/map.png" alt="" /></a>
                    </div>
                    <div class="contactholder">
                        <p>Our office is located right in the heart of <br /> Manhattan New York.  Feel free to drop in anytime.</p>
                        <ul class="address clearfix">
                            <li>
                                <h2 class="title">Life Settlement Division</h2>
                                <address>330 Madison Avenue New York, NY 10017</address>
                                <dl>
                                    <dt>Email:</dt>
                                    <dd>info@lifetrust.com</dd>
                                    <dt>Tel:</dt>
                                    <dd>212.653.0840</dd>
                                    <dt>Fax:</dt>
                                    <dd>212.653.0844</dd>
                                </dl>
                            </li>
                            <li>
                                <h2 class="title">Consumer Lending Division</h2>
                                <address>5300 Town &amp; Country Blvd, 160 Frisco, Texas 75034</address>
                                <dl>
                                    <dt>Email:</dt>
                                    <dd>info@lifetrust.com</dd>
                                    <dt>Tel:</dt>
                                    <dd>877.565.6616</dd>
                                    <dt>Fax:</dt>
                                    <dd>877.565.6313</dd>
                                </dl>
                            </li>
                        </ul>

                        <?php if (Yii::app()->user->hasFlash('contactus')): ?>

                            <div class="flash-success">
                                <?php echo Yii::app()->user->getFlash('contactus'); ?>
                            </div>

                        <?php else: ?>
                            <div class="contactform">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'contact-form',
                                    'enableClientValidation' => true,
                                    'clientOptions' => array(
                                        'validateOnSubmit' => true,
                                    ),
                                ));
                                ?>

                                <p>We would to hear from you!  Feel free to contact us at any time regarding <br /> any questions or concerns you may have.  <span class="required">*</span> <span style="color:white">= required</span></p>
                                <?php echo $form->errorSummary($model); ?>
                                <div class="row clearfix">
                                    <label>Inquiry: <span class="required">*</span></label>
                                    <?php echo $form->dropDownList($model, 'inquiry', array('Inquiry 1' => 'Inquiry 1', 'Inquiry 2' => 'Inquiry 2', 'Inquiry 3' => 'Inquiry 3')); ?>
                                </div>
                                <div class="row clearfix">
                                    <label>Name: <span class="required">*</span></label>
                                    <?php echo $form->textField($model, 'name'); ?>
                                </div>
                                <div class="row clearfix">
                                    <label>Email: <span class="required">*</span></label>
                                    <?php echo $form->textField($model, 'email'); ?>
                                </div>
                                <div class="row clearfix">
                                    <label>Telephone: <span class="required">*</span></label>
                                    <?php echo $form->textField($model, 'phone'); ?>
                                </div>
                                <div class="row clearfix">
                                    <label>Question/ Comment: <span class="required">*</span></label>
                                    <?php echo $form->textArea($model, 'comment', array('rows' => 5, 'cols' => 50)); ?>
                                </div>
                                <?php if (CCaptcha::checkRequirements()): ?>
                                    <div class="row clearfix">
                                        <label>Captcha: <span class="required">*</span></label>
                                        <div>
                                            <?php $this->widget('CCaptcha'); ?>
                                            <?php echo $form->textField($model, 'verifyCode'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="row btnsection">
                                    <?php echo CHtml::submitButton('Submit'); ?>
                                </div>
                                <?php $this->endWidget(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>