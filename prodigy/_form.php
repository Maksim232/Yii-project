<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Prodigy $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodigy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_prodag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_chet_klient')->textInput() ?>

    <?= $form->field($model, 'id_avtozapravki')->textInput() ?>

    <?= $form->field($model, 'id_topliva')->textInput() ?>

    <?= $form->field($model, 'kolichestvo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
