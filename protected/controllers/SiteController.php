<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 */
class SiteController extends Controller {

    public $layout = '//layouts/column1';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->layout = '//layouts/main';
        $banners = Banners::model()->findAll();
        $blocks = Blocks::model()->findAll();
        $pages = Pages::model()->findAll();
        $this->pageTitle = Yii::app()->name;
        $this->render('index', array(
            'banners' => $banners,
            'blocks' => $blocks,
            'pages' => $pages
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = '//layouts/main';
        $model = new LoginForm;


        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Displays the Service page
     */
    public function actionServices() {
        $pages = Pages::model()->findAll();
        $ServicesArray = Services::model()->findAll();
        $sort = new CSort();
        $sort->sortVar = 'sort';
        $sort->defaultOrder = 'id DESC';
        $sort->multiSort = true;
        $dataProvider = new CActiveDataProvider('Services', array(
            'sort' => $sort,
            'pagination' => array(
                'pageSize' => 6,
            ),
        ));
        $sort->attributes = array(
            'id' => array(
                'asc' => 'id asc',
                'desc' => 'id desc',
                'default' => 'desc',
                'label' => 'Id',
            ),
            'title' => array(
                'asc' => 'title asc',
                'desc' => 'title desc',
                'default' => 'desc',
                'label' => 'Title',
            ),
        );
        $this->render('services', array(
            'services' => $ServicesArray,
            'dataProvider' => $dataProvider,
            'pages' => $pages
        ));
    }

    /**
     * Displays the Contact Us page
     */
    public function actionContactUs() {
        $model = new ContactUs;
        if (isset($_POST['ContactUs'])) {
            $model->attributes = $_POST['ContactUs'];
            $model->save();
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->comment) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "Phone: {$model->phone}\r\n" .
                        "Comment/Question: {$model->comment}";
                mail(Yii::app()->params['adminEmail'], $subject, $model->comment, $headers);
                mail($model->email, $subject, $model->comment, $headers);
                Yii::app()->user->setFlash('contactus', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contactus', array(
            'model' => $model
        ));
    }

    /**
     * Displays the FAQ page
     */
    public function actionFaq() {
        $faqcats = FaqCat::model()->findAll();
        $this->render('faq', array(
            'faqcats' => $faqcats
        ));
    }

    /**
     * Displays the sitemap page
     */
    public function actionSitemap() {
        $urls = Pages::model()->findAll();
        $this->render('sitemap', array(
            'urls' => $urls
        ));
    }

    /**
     * Displays the Dynamic Pages
     */
    public function actionView() {
        $pageUrl = Yii::app()->request->getParam("slug", 0);
        $model = Pages::model()->find('url=:url', array(
            ':url' => $pageUrl,
        ));
        $route = 'error.php';
        $pages = Pages::model()->findAll();
        if ($model == NULL) {
            $this->redirect(Yii::app()->createUrl($route));
        } else {
            $this->render('pages', array(
                'model' => $model,
                'pages' => $pages
            ));
        }
    }

    /**
     * Displays the About page
     */
    public function actionAbout() {
        $this->render('about');
    }

    /**
     * Displays the Why Us page
     */
    public function actionWhyUs() {
        $this->render('whyus');
    }

}