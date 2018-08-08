<?php

namespace common\models;

use Yii;


class CardElastic extends \yii\elasticsearch\ActiveRecord
{

    public static function index()
    {
        return 'card_index';
    }

    public static function type()
    {
        return 'card';
    }

    public function attributes()
    {
        return [
            '_id',
            'id',
            'title',
            'description',
            'picture',
            'view',
        ];
    }

    public function rules()
    {
        return [
            [['description'], 'string'],
            [['view'], 'integer'],
            [['title', 'picture'], 'string', 'max' => 255],
        ];
    }
}