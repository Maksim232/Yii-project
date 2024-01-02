<?php 
use yii\widgets\ActiveForm; 
use yii\helpers\Url; 
use yii\helpers\Html; 
 
$urlavtozapravka = Url::to(['avtozapravka/index']); 
$urlfirma = Url::to(['firma/index']); 
$urlklients = Url::to(['klients/index']); 
$urltoplivo = Url::to(['toplivo/index']); 
$urlprodigy = Url::to(['prodigy/index']); 
$urluser = Url::to(['user/index']); 
 
$this->title="Автозаправки"; 
 
?> 
 
 
<div style="background-color: #90EA71; height: 35px;"> 
   <div>Лабораторная работа №4 - <?= Yii::$app->user->identity->username ?></div> 
</div> 
 
<h2 class="rainbow-animated">База данный "Заправки"</h2> 
 
<div class="d-grid gap-3 col-2 mx-auto">  
   <button onclick="document.location='<?=$urlavtozapravka?>'" class="btn1">Автозаправки</button> 
   <button onclick="document.location='<?=$urlfirma?>'" class="btn1">Фирмы</button>
   <button onclick="document.location='<?=$urlklients?>'" class="btn1">Клиенты</button> 
   <button onclick="document.location='<?=$urltoplivo?>'" class="btn1">Топливо</button> 
   <button onclick="document.location='<?=$urlprodigy?>'" class="btn1">Продажи</button>
   <button onclick="document.location='<?=$urluser?>'" class="btn1">Пользователи</button>
</div>