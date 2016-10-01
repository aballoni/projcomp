<?php

namespace app\controllers;

use Yii;
use app\models\MissueLine;
use app\models\MissueLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MissueLineController implements the CRUD actions for MissueLine model.
 */
class MissueLineController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MissueLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MissueLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MissueLine model.
     * @param integer $missue_line_id
     * @param integer $missue_id
     * @return mixed
     */
    public function actionView($missue_line_id, $missue_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($missue_line_id, $missue_id),
        ]);
    }

    /**
     * Creates a new MissueLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MissueLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'missue_line_id' => $model->missue_line_id, 'missue_id' => $model->missue_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MissueLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $missue_line_id
     * @param integer $missue_id
     * @return mixed
     */
    public function actionUpdate($missue_line_id, $missue_id)
    {
        $model = $this->findModel($missue_line_id, $missue_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'missue_line_id' => $model->missue_line_id, 'missue_id' => $model->missue_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MissueLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $missue_line_id
     * @param integer $missue_id
     * @return mixed
     */
    public function actionDelete($missue_line_id, $missue_id)
    {
        $this->findModel($missue_line_id, $missue_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MissueLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $missue_line_id
     * @param integer $missue_id
     * @return MissueLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($missue_line_id, $missue_id)
    {
        if (($model = MissueLine::findOne(['missue_line_id' => $missue_line_id, 'missue_id' => $missue_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
