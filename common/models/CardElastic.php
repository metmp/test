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
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'picture' => 'Picture',
            'view' => 'View',
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