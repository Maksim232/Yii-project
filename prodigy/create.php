<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Prodigy $model */

$this->title = 'Create Prodigy';
$this->params['breadcrumbs'][] = ['label' => 'Prodigies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodigy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
