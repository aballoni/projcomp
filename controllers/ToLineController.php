<?php

namespace app\controllers;

use Yii;
use app\models\ToLine;
use app\models\ToLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToLineController implements the CRUD actions for ToLine model.
 */
class ToLineController extends Controller
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
     * Lists all ToLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ToLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ToLine model.
     * @param integer $to_line_id
     * @param integer $to_id
     * @return mixed
     */
    public function actionView($to_line_id, $to_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($to_line_id, $to_id),
        ]);
    }

    /**
     * Creates a new ToLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ToLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'to_line_id' => $model->to_line_id, 'to_id' => $model->to_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ToLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $to_line_id
     * @param integer $to_id
     * @return mixed
     */
    public function actionUpdate($to_line_id, $to_id)
    {
        $model = $this->findModel($to_line_id, $to_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'to_line_id' => $model->to_line_id, 'to_id' => $model->to_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ToLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $to_line_id
     * @param integer $to_id
     * @return mixed
     */
    public function actionDelete($to_line_id, $to_id)
    {
        $this->findModel($to_line_id, $to_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ToLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $to_line_id
     * @param integer $to_id
     * @return ToLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($to_line_id, $to_id)
    {
        if (($model = ToLine::findOne(['to_line_id' => $to_line_id, 'to_id' => $to_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
