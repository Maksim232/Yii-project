<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\AvtozapravkaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avtozapravka-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kolonki') ?>

    <?= $form->field($model, 'id_avtozapravki') ?>

    <?= $form->field($model, 'name_firm') ?>

    <?= $form->field($model, 'adress') ?>

    <?= $form->field($model, 'vid_topliva') ?>

    <?php // echo $form->field($model, 'cena') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
