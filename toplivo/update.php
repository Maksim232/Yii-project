<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Toplivo $model */

$this->title = 'Update Toplivo: ' . $model->id_topliva;
$this->params['breadcrumbs'][] = ['label' => 'Toplivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_topliva, 'url' => ['view', 'id_topliva' => $model->id_topliva]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toplivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
