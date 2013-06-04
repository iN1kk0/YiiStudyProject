<?php

class DefaultController extends Controller {

    public $layout = 'admin.views.layouts.main';

    public function actionIndex() {
        $this->render('index');
    }

    protected function beforeAction($action) {
        if (Yii::app()->user->isGuest && $this->id . '/' . $action->id !== 'site/login') {
            Yii::app()->user->loginRequired();
        }
        return true;
    }

}