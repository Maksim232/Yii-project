<?php
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title="Заправки";
?>
<pde>
  
</pde>

<?php $form1 = ActiveForm::begin(); ?>
  <h1>Запрос №1:</h1>
    <?= $form1->field($model, 'adress')->label('Найти заправки по адресу')->dropDownList($Avtozapravka, ['class'=>'from-select']) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php 
      if(isset($zapros)){
        if(!$zapros){
          ?> <h3>Нет заправок по такому адресу</h3>
          <?php
        } else{
          ?>
<div class='container'>
    <h1>таблица "Заправки по адресу"</h1>
    <table>
        <tr>
            <th>id_avtozapravki</th>
            <th>name_firm</th>
            <th>vid_topliva</th>
            <th>cena</th>
        </tr>
        <?php foreach($zapros as $AvtoZp){ ?>
<tr>
            <td><?= $AvtoZp['id_avtozapravki'] ?></td>
            <td><?= $AvtoZp['name_firm'] ?></td>
            <td><?= $AvtoZp['vid_topliva'] ?></td>
            <td><?= $AvtoZp['cena'] ?></td>
</tr>
<?php } ?>
    </table>

</div>
           <?php
        }
      }
    ?>

<?php ActiveForm::end(); ?>
<?php $form2 = ActiveForm::begin(); ?>
<h1>Запрос №2:</h1>
    <?= $form2->field($model, 'name_firmi')->label('Сколько заправок имеет фирма')->dropDownList([ 
'Лукойл' => 'Лукойл', 
'Газпром' => 'Газпром', 
'Роснефть' => 'Роснефть', 
'Этиламин' => 'Этиламин', 
],['class'=>'form-select'])?>
     <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php 
      if(isset($zapros2)){
        if(!$zapros2){
          ?> <h3>Нет заправок по такому адресу</h3>
          <?php
        } else{
        
        ?>
        <h1> Компания владеет <?= 
        $zapros2 ?> заправкой(/ами)</h1>
           <?php
        }
      }
    ?>

<?php ActiveForm::end(); ?>

<?php $form3 = ActiveForm::begin(); ?>
<h1>Запрос №3:</h1>
    <?= $form3->field($model, 'vid_topliva')->label('Вывести адреса заправок фирмы:')->dropDownList([ 
'АИ-95' => 'АИ-95', 
'АИ-92' => 'АИ-92', 
'АИ-98' => 'АИ-98', 
'Метан' => 'Метан',
'Дизель' => 'Дизель',
],['class'=>'form-select'])?>
 <?= $form3->field($model, 'name_firmi')->label('Где есть топливо вида:')->dropDownList([ 
'Лукойл' => 'Лукойл', 
'Газпром' => 'Газпром', 
'Роснефть' => 'Роснефть', 
'Этиламин' => 'Этиламин', 
],['class'=>'form-select'])?>
     <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php 
      if(isset($zapros3)){
        if(!$zapros3){
          ?> <h3>Нет заправок по такому адресу</h3>
          <?php
        } else{
        
        ?>
        <div class='container'>
    <h1>таблица "Заправки по адресу"</h1>
    <table>
        <tr>
            <th>id_avtozapravki</th>
            <th>name_firm</th>
            <th>adress</th>
            <th>vid_topliva</th>
            <th>cena</th>
        </tr>
        <?php foreach($zapros3 as $AvtoZp){ ?>
<tr>
            <td><?= $AvtoZp['id_avtozapravki'] ?></td>
            <td><?= $AvtoZp['name_firm'] ?></td>
            <td><?= $AvtoZp['adress'] ?></td>
            <td><?= $AvtoZp['vid_topliva'] ?></td>
            <td><?= $AvtoZp['cena'] ?></td>
</tr>
<?php } ?>
    </table>

</div>
           <?php
        }
      }
    ?>

<?php ActiveForm::end(); ?>
<?php $form4 = ActiveForm::begin(); ?>
<h1>Запрос №4:</h1>
<?= $form4->field($model, 'vid_topliva2')->label('Найти самый дорогой бенз')->dropDownList([ 
'АИ-95' => 'АИ-95', 
'АИ-92' => 'АИ-92', 
'АИ-98' => 'АИ-98', 
'Метан' => 'Метан',
'Дизель' => 'Дизель',
],['class'=>'form-select'])?>
<?= $form4->field($model, 'vibor')->label('Выбрать дорогой / дешевый ')->dropDownList([ 
'1' => 'Дорогой', 
'0' => 'Дешевый', 
],['class'=>'form-select'])?>
 <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<?php 
  //($vibor==1) {
    if(isset($zapros4)){
      if(!$zapros4){
        ?> <h3>Нет заправок с таким бензином</h3>
        <?php
      } else{
      
      ?>
      <h1> Самый дорогой бенз стоит: <?= 
      $zapros4 ?> </h1>
         <?php
      }
   // }
  } else {
    if(isset($zapros41)){
      if(!$zapros41){
        ?> <h3>Нет заправок с таким бензином</h3>
        <?php
      } else{
      
      ?>
      <h1> Самый дешевый бенз стоит: <?= 
      $zapros41 ?> </h1>
         <?php
      }
    }
  }
  
?>

<?php ActiveForm::end(); ?>
<?php $form5 = ActiveForm::begin(); ?>
<h1>Запрос №5:</h1>
<?= $form5->field($model, 'name_firmi')->label('Выбрать название заправки')->dropDownList($Kolvo,['class'=>'form-select'])?>

<?= $form5->field($model, 'date_prodag')->label('Выбрать месяц')->dropDownList([ 
'09' => 'Сентябрь', 
'10' => 'Октябрь', 
'11' => 'Ноябрь', 
'12' => 'Декабрь',
],['class'=>'form-select'])?>
 <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<?php 
  if(isset($zapros5)){
    if(!$zapros5){
      ?> <h3>Нет заправок с таким бензином</h3>
      <?php
    } else{
    
    ?>
    <!-- <h1><?//print_r($zapros5)?></h1> -->
    <table>
        <tr>
          <th>Всего продано топлива за месяц</th>
          <th><?= $zapros5 ?></th>
        </tr>
    </table>
    <?php
    }
  }
?>

<?php ActiveForm::end(); ?>

<style>

table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th,
td {
  padding: 20px;
}
.container{
  margin-top: 20px;
  margin-bottom: 50px;
}
</style>