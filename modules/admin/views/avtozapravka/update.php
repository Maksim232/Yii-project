<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Avtozapravka $model */

$this->title = 'Update Avtozapravka: ' . $model->id_kolonki;
$this->params['breadcrumbs'][] = ['label' => 'Avtozapravkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kolonki, 'url' => ['view', 'id_kolonki' => $model->id_kolonki]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avtozapravka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
