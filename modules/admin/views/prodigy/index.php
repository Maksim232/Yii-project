<?php

use app\modules\admin\models\Prodigy;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProdigySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prodigies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodigy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prodigy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_prodag',
            'card_chet_klient',
            'id_avtozapravki',
            'id_topliva',
            //'kolichestvo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Prodigy $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
