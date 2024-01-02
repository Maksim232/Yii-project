<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Toplivo $model */

$this->title = $model->id_topliva;
$this->params['breadcrumbs'][] = ['label' => 'Toplivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="toplivo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_topliva' => $model->id_topliva], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_topliva' => $model->id_topliva], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_topliva',
            'vid_topliva',
            'ed_izmirenia',
            'cena',
        ],
    ]) ?>

</div>
