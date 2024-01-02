<?php

use app\modules\admin\models\Toplivo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ToplivoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Toplivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toplivo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Toplivo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_topliva',
            'vid_topliva',
            'ed_izmirenia',
            'cena',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Toplivo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_topliva' => $model->id_topliva]);
                 }
            ],
        ],
    ]); ?>


</div>
