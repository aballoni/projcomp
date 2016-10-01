<?php

namespace app\controllers;

use Yii;
use app\models\MreceiptLine;
use app\models\MreceiptLineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MreceiptLineController implements the CRUD actions for MreceiptLine model.
 */
class MreceiptLineController extends Controller
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
     * Lists all MreceiptLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MreceiptLineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MreceiptLine model.
     * @param integer $mreceipt_line_id
     * @param integer $mreceipt_id
     * @return mixed
     */
    public function actionView($mreceipt_line_id, $mreceipt_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mreceipt_line_id, $mreceipt_id),
        ]);
    }

    /**
     * Creates a new MreceiptLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MreceiptLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mreceipt_line_id' => $model->mreceipt_line_id, 'mreceipt_id' => $model->mreceipt_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MreceiptLine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mreceipt_line_id
     * @param integer $mreceipt_id
     * @return mixed
     */
    public function actionUpdate($mreceipt_line_id, $mreceipt_id)
    {
        $model = $this->findModel($mreceipt_line_id, $mreceipt_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mreceipt_line_id' => $model->mreceipt_line_id, 'mreceipt_id' => $model->mreceipt_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MreceiptLine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mreceipt_line_id
     * @param integer $mreceipt_id
     * @return mixed
     */
    public function actionDelete($mreceipt_line_id, $mreceipt_id)
    {
        $this->findModel($mreceipt_line_id, $mreceipt_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MreceiptLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mreceipt_line_id
     * @param integer $mreceipt_id
     * @return MreceiptLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mreceipt_line_id, $mreceipt_id)
    {
        if (($model = MreceiptLine::findOne(['mreceipt_line_id' => $mreceipt_line_id, 'mreceipt_id' => $mreceipt_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
