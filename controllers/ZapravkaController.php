<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use app\models\Avtozapravka;
use app\models\Firma;
use app\models\Klients;
use app\models\Laba2zaprosi;
use app\models\Prodigy;
use app\models\Svaz;
use app\models\Toplivo;
    
class ZapravkaController extends Controller
{ 
    public function actionIndex(){
        return $this->render('index');
    }


    public function actionAvtozapravka(){
        $Avtozapravka = Avtozapravka::find()->asArray()->all();
        return $this->render('avtozapravka', ['AvtoZp' => $Avtozapravka]);

    }
    public function actionAvtozapravkacrup(){ 
        if((Yii::$app->request->get('id' ))) { 
           $id = Yii::$app->request->get('id' );
           $model = Avtozapravka::findOne($id);
        } 
        else { 
           $model = new Avtozapravka(); 
        } 
        if($model->load(Yii::$app->request->post())){ 
           if($model->save()){ 
              Yii::$app->session->setFlash('success','Запись добавлена / Запись изменена'); 
              $Avtozapravka = Avtozapravka::find()->asArray()->all();
              return $this->render('avtozapravka', ['AvtoZp' => $Avtozapravka]);
           } 
           else { 
              Yii::$app->session->setFlash('error','Ошибка'); 
           } 
        } 
        

        return $this->render('avtozapravkacrup',compact('model')); 
     }

     public function actionAvtozapravkadel($id){ 
        $model = Avtozapravka::findOne($id); 
        if($model->delete()){ 
           Yii::$app->session->setFlash('success','Запись удалена'); 
           $Avtozapravka = Avtozapravka::find()->asArray()->all();
            return $this->render('avtozapravka', ['AvtoZp' => $Avtozapravka]); 
        } 
        else { 
           Yii::$app->session->setFlash('success','Ошибка'); 
           $Avtozapravka = Avtozapravka::find()->asArray()->all();
            return $this->render('avtozapravka', ['AvtoZp' => $Avtozapravka]);
        } 
     }


    public function actionFirma(){
        $Firma = Firma::find()->asArray()->all();
        return $this->render('Firma', ['FirmaZp' => $Firma]);
    }
    public function actionFirmacrup(){ 
        
        if(isset($_GET['id'])) { 
            $id = $_GET['id'];
           $model = Firma::findOne($id);
        } 
        else { 
           $model = new Firma(); 
        } 
        if($model->load(Yii::$app->request->post())){ 
           if($model->save()){ 
              Yii::$app->session->setFlash('success','Запись добавлена / Запись изменена'); 
              $Firma = Firma::find()->asArray()->all();
              return $this->render('Firma', ['FirmaZp' => $Firma]);
           } 
           else { 
              Yii::$app->session->setFlash('error','Ошибка'); 
           } 
        } 
        
        return $this->render('firmacrup',compact('model')); 
     }

     public function actionFirmadel($id){ 
        $model = Firma::findOne($id); 
        if($model->delete()){ 
           Yii::$app->session->setFlash('success','Запись удалена'); 
           $Firma = Firma::find()->asArray()->all();
            return $this->render('Firma', ['FirmaZp' => $Firma]); 
        } 
        else { 
           Yii::$app->session->setFlash('success','Ошибка'); 
           $Firma = Firma::find()->asArray()->all();
            return $this->render('Firma', ['FirmaZp' => $Firma]);
        } 
     }


    public function actionKlients(){
        $Klients = Klients::find()->asArray()->all();
        return $this->render('Klients', ['KlientsZp' => $Klients]);
    }
    public function actionKlientscrup(){ 
        
        if(isset($_GET['id'])) { 
            $id = $_GET['id'];
           $model = Klients::findOne($id);
        } 
        else { 
           $model = new Klients(); 
        } 
        if($model->load(Yii::$app->request->post())){ 
           if($model->save()){ 
              Yii::$app->session->setFlash('success','Запись добавлена / Запись изменена'); 
              $Klients = Klients::find()->asArray()->all();
              return $this->render('Klients', ['KlientsZp' => $Klients]);
           } 
           else { 
              Yii::$app->session->setFlash('error','Ошибка'); 
           } 
        } 
        
        return $this->render('klientscrup',compact('model')); 
     }

     public function actionKlientsdel($id){ 
        $model = Klients::findOne($id); 
        if($model->delete()){ 
           Yii::$app->session->setFlash('success','Запись удалена'); 
           $Klients = Klients::find()->asArray()->all();
            return $this->render('Klients', ['KlientsZp' => $Klients]); 
        } 
        else { 
           Yii::$app->session->setFlash('success','Ошибка'); 
           $Klients = Klients::find()->asArray()->all();
            return $this->render('Klients', ['KlientsZp' => $Klients]);
        } 
     }


    public function actionProdigy(){
        $Prodigy = Prodigy::find()->asArray()->with('klients', 'toplivo')->all();
        return $this->render('Prodigy', ['ProdigyZp' => $Prodigy]);
    }
    public function actionProdigycrup(){ 
        
        if(isset($_GET['id'])) { 
            $id = $_GET['id'];
           $model = Prodigy::findOne($id);
        } 

        else { 
           $model = new Prodigy(); 
        } 
        $fio = ArrayHelper::map(Klients::find()->all(), 'id','fio');
        $vid_topliva = ArrayHelper::map(Toplivo::find()->all(), 'id_topliva','vid_topliva');
        if($model->load(Yii::$app->request->post())){ 
           if($model->save()){ 
              Yii::$app->session->setFlash('success','Запись добавлена / Запись изменена'); 
              $ProdigyZp = Prodigy::find()->asArray()->with('klients', 'toplivo')->all();
              return $this->render('Prodigy',compact('ProdigyZp'));
           } 
           else { 
              Yii::$app->session->setFlash('error','Ошибка'); 
           } 
        } 
        
        return $this->render('Prodigycrup',compact('model', 'fio','vid_topliva' )); 
     }

     public function actionProdigydel($id){ 
        $model = Prodigy::findOne($id); 
        if($model->delete()){ 
           Yii::$app->session->setFlash('success','Запись удалена'); 
           $Prodigy = Prodigy::find()->asArray()->with('klients', 'toplivo')->all();
            return $this->render('Prodigy', ['ProdigyZp' => $Prodigy]);
        } 
        else { 
           Yii::$app->session->setFlash('success','Ошибка'); 
           $Prodigy = Prodigy::find()->asArray()->with('klients', 'toplivo')->all();
            return $this->render('Prodigy', ['ProdigyZp' => $Prodigy]);
        } 
     }



    public function actionToplivo(){
        $Toplivo = Toplivo::find()->asArray()->all();
        return $this->render('Toplivo', ['ToplivoZp' => $Toplivo]);
    }
    public function actionToplivocrup(){ 
        
        if(isset($_GET['id'])) { 
            $id = $_GET['id'];
           $model = Toplivo::findOne($id);
        } 
        else { 
           $model = new Toplivo(); 
        } 
        if($model->load(Yii::$app->request->post())){ 
           if($model->save()){ 
              Yii::$app->session->setFlash('success','Запись добавлена / Запись изменена'); 
              $Toplivo = Toplivo::find()->asArray()->all();
              return $this->render('Toplivo', ['ToplivoZp' => $Toplivo]);
           } 
           else { 
              Yii::$app->session->setFlash('error','Ошибка'); 
           } 
        } 
        
        return $this->render('Toplivocrup',compact('model')); 
     }

     public function actionToplivodel($id){ 
        $model = Toplivo::findOne($id); 
        if($model->delete()){ 
           Yii::$app->session->setFlash('success','Запись удалена'); 
           $Toplivo = Toplivo::find()->asArray()->all();
            return $this->render('Toplivo', ['ToplivoZp' => $Toplivo]); 
        } 
        else { 
           Yii::$app->session->setFlash('success','Ошибка'); 
           $Toplivo = Toplivo::find()->asArray()->all();
            return $this->render('Toplivo', ['ToplivoZp' => $Toplivo]);
        } 
     }


    public function actionZaprosi(){
        $Avtozapravka = ArrayHelper::map(Avtozapravka::find()->all(),'id_avtozapravki', 'adress' );
        $Kolvo = ArrayHelper::map(Avtozapravka::find()->all(),'id_avtozapravki', 'name_firm' );
        $model = new Laba2zaprosi();
        if(isset(Yii::$app->request->post('Laba2zaprosi')['adress'])) {
            $adresZapros = Yii::$app->request->post('Laba2zaprosi')['adress'];
            $zapros = Avtozapravka::find()->asArray()->where('id_avtozapravki='.$adresZapros.'')->all();
            return $this->render('zaprosi', compact('Avtozapravka', 'model', 'zapros', 'Kolvo')); 
        }
        elseif((isset(Yii::$app->request->post('Laba2zaprosi')['date_prodag']))&&(isset(Yii::$app->request->post('Laba2zaprosi')['name_firmi']))) {
            $date_prodag = Yii::$app->request->post('Laba2zaprosi')['date_prodag'];
            $nameFirmi = Yii::$app->request->post('Laba2zaprosi')['name_firmi'];
            $zapros5 = Prodigy::find()->asArray()->where('id_avtozapravki='. $nameFirmi .' and Month(`date_prodag`) = '. $date_prodag .'')->sum('kolichestvo');
            return $this->render('zaprosi', compact('Avtozapravka', 'model', 'zapros5', 'Kolvo')); 
        }
        elseif((isset(Yii::$app->request->post('Laba2zaprosi')['vid_topliva']))&&(isset(Yii::$app->request->post('Laba2zaprosi')['name_firmi']))) {
            $vid_topliva = Yii::$app->request->post('Laba2zaprosi')['vid_topliva'];
            $nameFirmi = Yii::$app->request->post('Laba2zaprosi')['name_firmi'];
            $zapros3 = Avtozapravka::find()->asArray()->where('name_firm="'.$nameFirmi.'" and vid_topliva="'.$vid_topliva.'"')->all();
            return $this->render('zaprosi', compact('Avtozapravka', 'model', 'zapros3', 'Kolvo')); 
        }
        elseif(isset(Yii::$app->request->post('Laba2zaprosi')['name_firmi'])) {
            $nameFirmi = Yii::$app->request->post('Laba2zaprosi')['name_firmi'];
            $zapros2 = Avtozapravka::find()->asArray()->where('name_firm="'.$nameFirmi.'"')->count();
            return $this->render('zaprosi', compact('Avtozapravka', 'model', 'zapros2', 'Kolvo')); 
        }
        elseif(isset(Yii::$app->request->post('Laba2zaprosi')['vid_topliva2'])) {
            $vid_topliva = Yii::$app->request->post('Laba2zaprosi')['vid_topliva2'];
            $vibor = Yii::$app->request->post('Laba2zaprosi')['vibor'];
            $zapros4 = Avtozapravka::find()->asArray()->where('vid_topliva="'.$vid_topliva.'"')->max('cena');
            $zapros41 = Avtozapravka::find()->asArray()->where('vid_topliva="'.$vid_topliva.'"')->min('cena');
            return $this->render('zaprosi', compact('Avtozapravka', 'model', 'zapros4', 'vibor', 'zapros41', 'Kolvo')); 
        }
        
        return $this->render('zaprosi', compact('Avtozapravka', 'model', 'Kolvo')); 

    }
    
}