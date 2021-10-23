<?php


namespace app\controllers;
use app\models\AddKeyForm;
use app\models\KeyList;
use Yii;
use yii\base\Controller;

class KeyboardController extends Controller
{
 public function actionIndex()
 {
     $model = new KeyList();

     return $this->render('index', ['model' => $model]);
 }

 public function actionCreate()
 {
     $model = new KeyList();
     if ($model->load(Yii::$app->request->post()) && $model->save()){
         Yii::$app->getResponse()->redirect(['keyboard/index']);
     }
     return $this->render('create', ['model' => $model]);
 }

 public function actionUpdate()
 {
     $id = $_GET['id'];
     $model = KeyList::find()->where("id=$id")->one();
     if ($model->load(Yii::$app->request->post()) && $model->save()){
         Yii::$app->getResponse()->redirect(['keyboard/index']);
     }
     return $this->render('update', ['model' => $model]);
 }

 public function actionDelete()
 {
     $id = $_GET['id'];
     $model = KeyList::find()->where("id=$id")->one();
     $model->delete();
     Yii::$app->getResponse()->redirect(['keyboard/index']);

     return $this->render('delete', ['model' => $model]);
 }
}