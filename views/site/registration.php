<?php 
 
/** @var yii\web\View $this */ 
/** @var yii\bootstrap5\ActiveForm $form */ 
 
/** @var app\models\LoginForm $model */ 
 
use yii\bootstrap5\ActiveForm; 
use yii\bootstrap5\Html; 
 
$this->title = 'Регистрация'; 
$this->params['breadcrumbs'][] = $this->title; 
?> 
 
<video autoplay muted loop id="myVideo"> 
  <source src="../images/test5.mp4" type="video/mp4"> 
</video> 
 
<div class="site-login"> 
    <h1><?= Html::encode($this->title) ?></h1> 
 
    <!-- <p>Please fill out the following fields to login:</p> --> 
 
    <div class="row"> 
        <div class="col-lg-5"> 
 
            <?php $form = ActiveForm::begin([ 
                'id' => 'login-form', 
                'fieldConfig' => [ 
                    'template' => "{label}\n{input}\n{error}", 
                    'labelOptions' => ['class' => 'col-lg-12 col-form-label mr-lg-3'], 
                    'inputOptions' => ['class' => 'col-lg-3 form-control'], 
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'], 
                ], 
            ]); ?> 
 
            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'type'=>'text','maxlength'=>55,'minlength'=>5])->label('Логин') ?> 
 
            <?= $form->field($model, 'password')->passwordInput(['max' => 45])->label('Пароль') ?> 
 
            <?= $form->field($model, 'RepeatedPassword')->passwordInput(['max' => 45,'min' => 5])->label('Повторите пароль:') ?> 
 
            <p>Уже есть аккаунт? - <?= HTML::a('Авторизируйтесь',['/site/login']) ?></p> 
 
            <div class="form-group"> 
                <div> 
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-secondary', 'name' => 'login-button']) ?> 
                </div> 
            </div> 
 
            <?php ActiveForm::end(); ?> 
 
            <!-- <div style="color:#999;"> 
                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br> 
                To modify the username/password, please check out the code <code>app\models\User::$users</code>. 
            </div> --> 
 
        </div> 
    </div> 
</div> 
 
<style> 
    #footer { 
      display: none; 
    } 
     
    /* Style the video: 100% width and height to cover the entire window */ 
    #myVideo { 
        position: fixed; 
        right: 0; 
        bottom: -90px; 
        min-width: 100%; 
        min-height: 100%; 
        z-index: -1; 
    } 
 
    /* Add some content at the bottom of the video/page */ 
    .content { 
        position: fixed; 
        bottom: 0; 
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1; 
        width: 100%; 
        padding: 20px; 
    } 
 
    /* Style the button used to pause/play the video */ 
    #myBtn { 
        width: 200px; 
        font-size: 18px; 
        padding: 10px; 
        border: none; 
        background: #000; 
        color: #fff; 
        cursor: pointer; 
    } 
 
    #myBtn:hover { 
        background: #ddd; 
        color: black; 
    } 
</style>