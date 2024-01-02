<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Toplivo;
use app\modules\admin\models\ToplivoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToplivoController implements the CRUD actions for Toplivo model.
 */
class ToplivoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Toplivo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ToplivoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Toplivo model.
     * @param int $id_topliva Id Topliva
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_topliva)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_topliva),
        ]);
    }

    /**
     * Creates a new Toplivo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Toplivo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_topliva' => $model->id_topliva]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Toplivo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_topliva Id Topliva
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_topliva)
    {
        $model = $this->findModel($id_topliva);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_topliva' => $model->id_topliva]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Toplivo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_topliva Id Topliva
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_topliva)
    {
        $this->findModel($id_topliva)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Toplivo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_topliva Id Topliva
     * @return Toplivo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_topliva)
    {
        if (($model = Toplivo::findOne(['id_topliva' => $id_topliva])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
