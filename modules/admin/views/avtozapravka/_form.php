<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Avtozapravka $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avtozapravka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_avtozapravki')->textInput() ?>

    <?= $form->field($model, 'name_firm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vid_topliva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cena')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
