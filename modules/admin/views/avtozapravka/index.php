<?php

use app\modules\admin\models\Avtozapravka;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\AvtozapravkaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Avtozapravkas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtozapravka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Avtozapravka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kolonki',
            'id_avtozapravki',
            'name_firm',
            'adress',
            'vid_topliva',
            //'cena',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Avtozapravka $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kolonki' => $model->id_kolonki]);
                 }
            ],
        ],
    ]); ?>


</div>
