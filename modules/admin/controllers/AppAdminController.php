<?php 
 
namespace app\modules\admin\controllers; 
 
use yii\web\Controller; 
use yii\filters\AccessControl; 
 
class AppAdminController extends Controller 
{ 
   /** 
    * Renders the index view for the module 
   * @return string 
   */ 
   public function actionIndex() 
   { 
      return $this->render('index'); 
   } 
}