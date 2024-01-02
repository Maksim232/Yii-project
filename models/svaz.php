<?php 
 
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Svaz extends ActiveRecord{ 
    public function getAvtozapravka()
    {
        return $this->hasOne(Avtozapravka::class,['id_kolonki'=>'id']);
    }
    public function getFirm()
        {
            return $this->hasOne(Firm::class,['id'=>'id_firm']);
        }
        public function getToplivo()
    {
        return $this->hasOne(Toplivo::class,['id_topliva'=>'id_topliva']);
    }
}