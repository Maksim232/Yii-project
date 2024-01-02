<?php 
use yii\widgets\ActiveForm; 
use app\models\Reception; 
use yii\helpers\Url; 
use yii\helpers\Html; 
 
$this->title="Изменение на автозаправках"; 
 
$trAvtozapravka = Url::to(['/zapravka/firma']);

?> 

<?php $form = ActiveForm::begin(); ?> 
 
<div class="d-grid col-3" style="margin-top: 20px;"> 
   <?= $form->field($model, 'name_firm')->TextInput(['placeholder'=>'Название фирмы','max'=>15]) ?> 
   <?= $form->field($model, 'ur_adress')->TextInput(['placeholder'=>'Адрес заправки','max'=>25]) ?> 
   <?= $form->field($model, 'phone')->Input('phone',['placeholder'=>'Телефон','max'=>150]) ?>  
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