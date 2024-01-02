<?php

use app\modules\admin\models\Svaz;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\SvazSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Svazs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="svaz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Svaz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_firm',
            'id_topliva',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Svaz $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
