<?php

namespace backend\controllers;

use Yii;
use app\models\ShowLikeb;
use app\models\ShowLikebSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShowLikebController implements the CRUD actions for ShowLikeb model.
 */
class ShowLikebController extends Controller
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
     * Lists all ShowLikeb models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShowLikebSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShowLikeb model.
     * @param integer $stuId
     * @param integer $bookId
     * @return mixed
     */
    public function actionView($stuId, $bookId)
    {
        return $this->render('view', [
            'model' => $this->findModel($stuId, $bookId),
        ]);
    }

    /**
     * Creates a new ShowLikeb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShowLikeb();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'bookId' => $model->bookId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShowLikeb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $stuId
     * @param integer $bookId
     * @return mixed
     */
    public function actionUpdate($stuId, $bookId)
    {
        $model = $this->findModel($stuId, $bookId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stuId' => $model->stuId, 'bookId' => $model->bookId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShowLikeb model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $stuId
     * @param integer $bookId
     * @return mixed
     */
    public function actionDelete($stuId, $bookId)
    {
        $this->findModel($stuId, $bookId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShowLikeb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $stuId
     * @param integer $bookId
     * @return ShowLikeb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stuId, $bookId)
    {
        if (($model = ShowLikeb::findOne(['stuId' => $stuId, 'bookId' => $bookId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
