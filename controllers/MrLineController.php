<?php

namespace app\controllers;

use Yii;
use app\models\MrLine;
use app\models\MrLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MrLineController implements the CRUD actions for MrLine model.
 */
class MrLineController extends Controller
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
     * Lists all MrLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MrLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MrLine model.
     * @param integer $mr_line_id
     * @param integer $mr_id
     * @return mixed
     */
    public function actionView($mr_line_id, $mr_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mr_line_id, $mr_id),
        ]);
    }

    /**
     * Creates a new MrLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MrLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mr_line_id' => $model->mr_line_id, 'mr_id' => $model->mr_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MrLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mr_line_id
     * @param integer $mr_id
     * @return mixed
     */
    public function actionUpdate($mr_line_id, $mr_id)
    {
        $model = $this->findModel($mr_line_id, $mr_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mr_line_id' => $model->mr_line_id, 'mr_id' => $model->mr_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MrLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mr_line_id
     * @param integer $mr_id
     * @return mixed
     */
    public function actionDelete($mr_line_id, $mr_id)
    {
        $this->findModel($mr_line_id, $mr_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MrLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mr_line_id
     * @param integer $mr_id
     * @return MrLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mr_line_id, $mr_id)
    {
        if (($model = MrLine::findOne(['mr_line_id' => $mr_line_id, 'mr_id' => $mr_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
