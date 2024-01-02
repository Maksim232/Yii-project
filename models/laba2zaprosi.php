<?php

namespace app\models;

use yii\base\Model;

class Laba2zaprosi extends Model
{
    public $adress;
    public $name_firmi;
    public $vid_topliva2;
    public $vibor;
    public $vid_topliva;
    public $date_prodag;


    public function rules()
    {
        return [
            [['adress', 'name_firmi', 'vid_topliva2','vibor', 'vid_topliva', 'date_prodag'], 'required'],
        ];
    }
}