<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class DefaultController extends Controller
{
    public function beforeAction($action)
    {
            if (Yii::$app->user->isGuest && $action->id != "login") {
                return $this->redirect('login');
            }


        return parent::beforeAction($action);
    }
}
