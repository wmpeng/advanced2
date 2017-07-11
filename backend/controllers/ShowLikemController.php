<?php

namespace backend\controllers;

use Yii;
use app\models\ShowLikem;
use app\models\ShowLikemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShowLikemController implements the CRUD actions for ShowLikem model.
 */
class ShowLikemController extends Controller
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
     * Lists all ShowLikem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShowLikemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShowLikem model.
     * @param integer $stuId
     * @param integer $movieId
     * @return mixed
     */
    public function actionView($stuId, $movieId)
    {
        return $this->render('view', [
            'model' => $this->findModel($stuId, $movieId),
        ]);
    }

    /**
     * Creates a new ShowLikem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShowLikem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'movieId' => $model->movieId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShowLikem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stuId
     * @param integer $movieId
     * @return mixed
     */
    public function actionUpdate($stuId, $movieId)
    {
        $model = $this->findModel($stuId, $movieId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'movieId' => $model->movieId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShowLikem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stuId
     * @param integer $movieId
     * @return mixed
     */
    public function actionDelete($stuId, $movieId)
    {
        $this->findModel($stuId, $movieId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShowLikem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stuId
     * @param integer $movieId
     * @return ShowLikem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stuId, $movieId)
    {
        if (($model = ShowLikem::findOne(['stuId' => $stuId, 'movieId' => $movieId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
