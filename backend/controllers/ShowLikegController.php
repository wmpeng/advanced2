<?php

namespace backend\controllers;

use Yii;
use app\models\ShowLikeg;
use app\models\ShowLikegSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShowLikegController implements the CRUD actions for ShowLikeg model.
 */
class ShowLikegController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ShowLikeg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShowLikegSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShowLikeg model.
     * @param integer $stuId
     * @param integer $gameId
     * @return mixed
     */
    public function actionView($stuId, $gameId)
    {
        return $this->render('view', [
            'model' => $this->findModel($stuId, $gameId),
        ]);
    }

    /**
     * Creates a new ShowLikeg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShowLikeg();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'gameId' => $model->gameId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShowLikeg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stuId
     * @param integer $gameId
     * @return mixed
     */
    public function actionUpdate($stuId, $gameId)
    {
        $model = $this->findModel($stuId, $gameId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'gameId' => $model->gameId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShowLikeg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stuId
     * @param integer $gameId
     * @return mixed
     */
    public function actionDelete($stuId, $gameId)
    {
        $this->findModel($stuId, $gameId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShowLikeg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stuId
     * @param integer $gameId
     * @return ShowLikeg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stuId, $gameId)
    {
        if (($model = ShowLikeg::findOne(['stuId' => $stuId, 'gameId' => $gameId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
