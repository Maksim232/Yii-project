<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProdigySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodigy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_prodag') ?>

    <?= $form->field($model, 'card_chet_klient') ?>

    <?= $form->field($model, 'id_avtozapravki') ?>

    <?= $form->field($model, 'id_topliva') ?>

    <?php // echo $form->field($model, 'kolichestvo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
