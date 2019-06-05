<?php

namespace app\models;
use yii\db\ActiveRecord;


class AddpostForm extends ActiveRecord
{
    public static function tableName(){
        return 'post';
    }

    public function rules(){
        return [
            [ 'name', 'trim' ],
            [ 'text', 'trim' ],
        ];
    }
}