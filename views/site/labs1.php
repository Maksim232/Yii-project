<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

//var_dump($_POST);
?>

<?php $form = ActiveForm::begin(); ?>

<?php
$parameters = [
   'М' => 'Мужской',
   'Ж' => 'Женский',
];
$parametersP = [
    'Да' => 'Заказывал',
    'Нет' => 'Не заказывал',
];
?>

<h1>Laba №1</h1>
   <?= $form->field($model, 'numcard') -> label('Номер Вашей карты') ?>
    <?= $form->field($model, 'inichiali') -> label('Ваше ФИО') ?>
    <?= $form->field($model, 'pochta') -> label('Введите ваш Mail') -> input("email") ?>
    <?= $form->field($model, 'phone') -> label('Введите ваш телефон') -> input("number") ?>
    <?= $form->field($model, 'dateborn') -> label('Введите вашу дату рождения') -> input("date") ?>
    <?= $form->field($model, 'male') -> label('Введите ваш Пол') -> dropDownList($parameters) ?>
    <?= $form->field($model, 'order') -> label('Были нашим клиентом?') -> radioList($parametersP)?>

<div class="form-group">
   <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
</div>
<?php 
if($model->load(Yii::$app->request->post())){
   ?> 
      <div style="margin-left: 100px;">
         <h2>Переданные данные клиента</h2>
         <table>
            <tr>
               <td>Номер карты клиента:</td>
               <td><?= Html::encode($model->numcard) ?></td>
            </tr>
            <tr>
               <td>ФИО клиента:</td>
               <td><?= Html::encode($model->inichiali) ?></td>
            </tr>
            <tr>
               <td>Почта:</td>
               <td><?= Html::encode($model->pochta) ?></td>
            </tr>
            <tr>
               <td>Телефон:</td>
               <td><?= Html::encode($model->phone) ?></td>
            </tr>
            <tr>
               <td>Дата рождения:</td>
               <td><?= Html::encode($model->dateborn) ?></td>
            </tr>
            <tr>
               <td>Пол:</td>
               <td><?= Html::encode($model->male) ?></td>
            </tr>
            <tr>
               <td>Заказ:</td>
               <td><?= Html::encode($model->order) ?></td>
            </tr>
         </table>
      </div>
   <?php
}
?>
</div>



<?php ActiveForm::end(); ?>