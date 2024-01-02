<?php 
 
/** @var yii\web\View $this */ 
/** @var yii\bootstrap5\ActiveForm $form */ 
 
/** @var app\models\LoginForm $model */ 
 
use yii\bootstrap5\ActiveForm; 
use yii\bootstrap5\Html; 
use yii\helpers\Url; 
 
$urlRegist = Url::to(["/site/registration"]); 
 
$this->title = 'Авторизация'; 
$this->params['breadcrumbs'][] = $this->title; 
?> 
<div class="site-login"> 
    <h1><?= Html::encode($this->title) ?></h1> 
 
    <!-- <p>Please fill out the following fields to login:</p> --> 
 
    <div class="row"> 
        <div class="col-lg-5"> 
 
            <?php $form = ActiveForm::begin([ 
                'id' => 'login-form', 
                'fieldConfig' => [ 
                    'template' => "{label}\n{input}\n{error}", 
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'], 
                    'inputOptions' => ['class' => 'col-lg-3 form-control'], 
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'], 
                ], 
            ]); ?> 
 
            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'type'=>'text','maxlength'=>55,'minlength'=>5])->label('Логин') ?> 
 
            <?= $form->field($model, 'password')->passwordInput(['max' => 45,'min' => 5])->label('Пароль') ?> 
 
            <?= $form->field($model, 'rememberMe')->checkbox([ 
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>", 
            ])->label('Запомнить меня') ?> 
  
            <p>Ещё нет аккаунта? - <?= HTML::a('Зарегистрируйтесь',['/site/registration']) ?></p> 
 
            <div class="form-group"> 
                <div> 
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-secondary', 'name' => 'login-button']) ?> 
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
