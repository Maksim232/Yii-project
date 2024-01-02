<?php

namespace app\models;

use yii\base\Model;

class Labs1Form extends Model
{
    public $numcard;
    public $inichiali;
    public $pochta;
    public $phone;
    public $dateborn;
    public $male;
    public $order;

    

    public function rules()
    {
        return [
            ['numcard', 'required', 'message' => 'Введите номер карты'],
            ['numcard', 'number', 'max' => 3,'tooBig' => 'Вводите не больше 3 символов', 'min' => 2,'tooSmall' => 'Вводите не меньше 2 символов'],
            ['inichiali','string', 'length' =>[4, 24], 'message' => 'Вводите не больше 3 символов'],
            ['inichiali','required', 'message' => 'Введите ФИО'],
            ['pochta', 'email', 'message' => 'Введите Email'],
            ['phone','required', 'message' => 'Введите номер телефона'],
            ['dateborn', 'required', 'message' => 'Введите дату рождения'],
            ['male', 'required', 'message' => 'Введите пол'],
            ['order','required'],
        ];
    }
}
