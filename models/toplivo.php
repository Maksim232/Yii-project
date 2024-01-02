<?php 
 
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Toplivo extends ActiveRecord{ 
 
    public function getSvaz()
    {
        return $this->hasMany(Svaz::class,['id_topliva'=>'id_topliva']);
    }
    public function getProdigy()
    {
        return $this->hasMany(Prodigy::class,['id_topliva'=>'id_topliva']);
    }
    public function attributeLabels(){ 
        return[       
        'id_topliva' => 'Код', 
        'cena' => 'Цена', 
        'vid_topliva' => 'Вид топлива', 
        'ed_izmirenia' => 'Единица измерения', 
        ]; 
     } 
   
     public function rules(){ 
        return[ 
           [['id_topliva','ed_izmirenia','vid_topliva', 'cena'],'required'],  
        ]; 
     }
}