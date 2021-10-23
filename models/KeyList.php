<?php


namespace app\models;
use yii\db\ActiveRecord;

class KeyList extends ActiveRecord
{
    public function rules()
    {
        return [
            [['title', 'price'], 'required'],
            [['price'], 'integer'],
            [['country'], 'string'],
            [['type'], 'string'],
        ];
    }


    public static function tableName()
    {
        return '{{keyboards}}';
    }


    public function listTitle()
    {
        return self::find()->all();
    }
}