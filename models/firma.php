<?php 
 
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Firma extends ActiveRecord{ 
    public function getSvaz()
        {
            return $this->hasMany(Svaz::class,['id_firm'=>'id']);
        }
        public function attributeLabels(){ 
            return[       
            'id' => 'Код', 
            'name_firm' => 'Навание фирмы',  
            'ur_adress' => 'Адрес фирмы', 
            'phone' => 'Телефон', 
            ]; 
         } 
       
         public function rules(){ 
            return[ 
               [['name_firm','name_firm','ur_adress', 'phone'],'required'],  
            ]; 
         }
}