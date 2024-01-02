<?php 
use yii\widgets\ActiveForm; 
use app\models\Reception; 
use yii\helpers\Url; 
use yii\helpers\Html; 
 
$this->title="Изменение на автозаправках"; 
 
$trAvtozapravka = Url::to(['/zapravka/toplivo']);

?> 
<?php $form = ActiveForm::begin(); ?> 
<div class="d-grid col-3" style="margin-top: 20px;"> 
   <?= $form->field($model, 'vid_topliva')->TextInput(['placeholder'=>'Вид топлива','max'=>15]) ?> 
   <?= $form->field($model, 'ed_izmirenia')->TextInput(['placeholder'=>'Единица измерения ','max'=>25]) ?> 
   <?= $form->field($model, 'cena')->Input('phone',['placeholder'=>'Цена','max'=>190]) ?>  
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