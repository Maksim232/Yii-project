<?php 
use yii\widgets\ActiveForm; 
use app\models\Reception; 
use yii\helpers\Url; 
use yii\helpers\Html; 
 
$this->title="Изменение на автозаправках"; 
 
$trAvtozapravka = Url::to(['/zapravka/prodigy']);

?> 
<?php $form = ActiveForm::begin(); ?> 
<div class="d-grid col-3" style="margin-top: 20px;"> 
   <?= $form->field($model, 'date_prodag')->Input('date') ?> 
   <?= $form->field($model, 'card_chet_klient')->dropDownList($fio , ['class'=>'from-select']) ?> 
   <?= $form->field($model, 'id_avtozapravki')->Input('number',['placeholder'=>'Номер заправки','max'=>1150]) ?> 
   <?= $form->field($model, 'id_topliva')->dropDownList($vid_topliva , ['class'=>'from-select'])  ?> 
   <?= $form->field($model, 'kolichestvo')->Input('number',['placeholder'=>'Кол-во топлива','max'=>1150]) ?> 

   <div class="form-group"> 
      <?= Html::submitButton('Применить', ['class' => 'btn btn-secondary']) ?> 
      <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Вернуться к таблице</a> 
   </div> 
</div> 
 
<?php ActiveForm::end(); ?> 
 
<style> 
   .help-block { 
      color: red; 
   } 
</style>