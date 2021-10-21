<?php


namespace app\controllers;
use Yii;
use yii\base\Controller;

class DatasController extends Controller
{
    public function actionRegister()
    {
        return $this->render('register');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }
}