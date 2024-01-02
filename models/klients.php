<?php 
 
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Klients extends ActiveRecord{ 
    public function getProdigy()
    {
        return $this->hasMany(Prodigy::class,['id'=>'card_chet_klient']);
    }
    public function attributeLabels(){ 
        return[       
        'id' => 'Код', 
        'fio' => 'ФИО',  
        'adress' => 'Адрес', 
        'phonenumder' => 'Телефон', 
        ]; 
     } 
   
     public function rules(){ 
        return[ 
           [['fio','adress','phonenumder'],'required'],  
        ]; 
     }
}