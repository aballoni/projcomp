<?php

namespace app\controllers;

use Yii;
use app\models\PoLine;
use app\models\PoLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PoLineController implements the CRUD actions for PoLine model.
 */
class PoLineController extends Controller
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
     * Lists all PoLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PoLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PoLine model.
     * @param integer $po_line_id
     * @param integer $po_id
     * @return mixed
     */
    public function actionView($po_line_id, $po_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($po_line_id, $po_id),
        ]);
    }

    /**
     * Creates a new PoLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PoLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'po_line_id' => $model->po_line_id, 'po_id' => $model->po_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PoLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $po_line_id
     * @param integer $po_id
     * @return mixed
     */
    public function actionUpdate($po_line_id, $po_id)
    {
        $model = $this->findModel($po_line_id, $po_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'po_line_id' => $model->po_line_id, 'po_id' => $model->po_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PoLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $po_line_id
     * @param integer $po_id
     * @return mixed
     */
    public function actionDelete($po_line_id, $po_id)
    {
        $this->findModel($po_line_id, $po_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PoLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $po_line_id
     * @param integer $po_id
     * @return PoLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($po_line_id, $po_id)
    {
        if (($model = PoLine::findOne(['po_line_id' => $po_line_id, 'po_id' => $po_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
