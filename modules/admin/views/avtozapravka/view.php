<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Avtozapravka $model */

$this->title = $model->id_kolonki;
$this->params['breadcrumbs'][] = ['label' => 'Avtozapravkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="avtozapravka-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kolonki' => $model->id_kolonki], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kolonki' => $model->id_kolonki], [
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
            'id_kolonki',
            'id_avtozapravki',
            'name_firm',
            'adress',
            'vid_topliva',
            'cena',
        ],
    ]) ?>

</div>
