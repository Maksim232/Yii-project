<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Avtozapravka $model */

$this->title = 'Create Avtozapravka';
$this->params['breadcrumbs'][] = ['label' => 'Avtozapravkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtozapravka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
