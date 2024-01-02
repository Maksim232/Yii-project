<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Toplivo $model */

$this->title = 'Create Toplivo';
$this->params['breadcrumbs'][] = ['label' => 'Toplivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toplivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
