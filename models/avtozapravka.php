<?php
namespace app\models;
use yii\db\ActiveRecord;
class Avtozapravka extends ActiveRecord
{
        public function getFirm()
        {
            return $this->hasMany(Svaz::class,['id'=>'id_kolonki']);
        }
        public function getProdigy()
        {
            return $this->hasMany(Prodigy::class,['id'=>'id_firm']);
        }
        public function attributeLabels(){ 
            return[       
            'id' => 'Код', 
            'id_avtozapravki' => 'Номер заправки', 
            'name_firm' => 'Название фирмы', 
            'adress' => 'Адрес заправки', 
            'vid_topliva' => 'Вид топлива', 
            'cena' => 'Цена', 
            ]; 
         } 
       
         public function rules(){ 
            return[ 
               [['id_avtozapravki','name_firm','adress','vid_topliva', 'cena'],'required'],  
            ]; 
         }
}

