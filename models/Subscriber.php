<?php
namespace app\models;
use Yii;
use yii\base\Model;

class Subscriber extends Model
{
    public $email;
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email']
        ];
    }
    public function save()
    {
        $sql = "INSERT INTO `users` (id, email) VALUES (null, '{$this->email}')";
         return Yii::$app->db->createCommand($sql)->execute();
    }
}