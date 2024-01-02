<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Svaz $model */

$this->title = 'Create Svaz';
$this->params['breadcrumbs'][] = ['label' => 'Svazs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="svaz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
