<?php 
use yii\widgets\ActiveForm; 
use app\models\Reception; 
use yii\helpers\Url; 
use yii\helpers\Html; 
 
$this->title="Изменение на автозаправках"; 
 
$trAvtozapravka = Url::to(['/zapravka/avtozapravka']);

?> 

<?php $form = ActiveForm::begin(); ?> 
 
<div class="d-grid col-3" style="margin-top: 20px;"> 
   <?= $form->field($model, 'id_avtozapravki')->Input('number')?> 
   <?= $form->field($model, 'name_firm')->TextInput(['placeholder'=>'Название фирмы','max'=>15]) ?> 
   <?= $form->field($model, 'adress')->TextInput(['placeholder'=>'Адрес заправки','max'=>15]) ?> 
   <?= $form->field($model, 'vid_topliva')->TextInput(['placeholder'=>'Вид топлива','max'=>15]) ?> 
   <?= $form->field($model, 'cena')->Input('number',['placeholder'=>'Цена','max'=>1500]) ?>  
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