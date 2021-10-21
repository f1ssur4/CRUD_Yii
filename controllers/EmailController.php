<?php


namespace app\controllers;
use Yii;
use yii\base\Controller;
use app\models\Subscriber;

class EmailController extends Controller
{
    public function actionForm()
    {
        $formData = Yii::$app->request->post();
        if(Yii::$app->request->isPost){
            $model = new Subscriber;
            $model->email = $formData['email'];
            if ($model->validate() && $model->save()){
                $session = Yii::$app->session;
                $session->setFlash('successful', 'Данные успешно добавлены');
            }else{
                $session = Yii::$app->session;
                $session->setFlash('noSuccessful', 'Данные НЕЕЕ успешно НЕЕ добавлены');
            }

        }
        return $this->render('form');
    }
}