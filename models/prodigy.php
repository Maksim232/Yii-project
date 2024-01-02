<?php 
 
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Prodigy extends ActiveRecord{ 
    public function getToplivo()
    {
        return $this->hasOne(Toplivo::class,['id_topliva'=>'id_topliva']);
    }
    public function getKlients()
    {
        return $this->hasOne(Klients::class,['id'=>'card_chet_klient']);
    }
    public function attributeLabels(){ 
        return[       
        'id' => 'Код', 
        'date_prodag' => 'Дата', 
        'card_chet_klient' => 'Счет клиента', 
        'id_avtozapravki' => 'Код заправки', 
        'id_topliva' => 'Код топлива', 
        'kolichestvo' => 'Кол-во', 
        ]; 
     } 
   
     public function rules(){ 
        return[ 
           [['date_prodag','card_chet_klient','id_avtozapravki','id_topliva', 'kolichestvo'],'required'],  
        ]; 
     }
}