<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the Controller of movie pages. 
 */

namespace frontend\controllers;

use Yii;
use frontend\models\Movie;
use frontend\models\MovieSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

date_default_timezone_set('Asia/Shanghai');

/**
 * MovieController implements the CRUD actions for Movie model.
 */
class MovieController extends Controller
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
     * Lists all Movie models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            $this->goHome();
        } else {
            if (Yii::$app->user->identity->username != 'admin') {
                $model = new Movie();

                if ($model->load(Yii::$app->request->post())) {
                    $model['username'] = Yii::$app->user->identity->username;
                    $model['sharetime'] = date('Y-m-d H:i:s');
                    if ($model->save())
                        return $this->refresh();
                } else {
                    $searchModel = new MovieSearch();
                    $dataProvider = $searchModel->search2();

                    return $this->render('index_user', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                        'model' => $model,
                    ]);
                }
            } else {
                $searchModel = new MovieSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            }
        }
    }

    /**
     * Displays a single Movie model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->username != 'admin') {
            return $this->goHome();
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new Movie model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->username != 'admin') {
            return $this->goHome();
        } else {
            $model = new Movie();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->movie_id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing Movie model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->username != 'admin') {
            return $this->goHome();
        } else {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->movie_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing Movie model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->username != 'admin') {
            return $this->goHome();
        } else {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Movie model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Movie the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->username != 'admin') {
            return $this->goHome();
        } else {
            if (($model = Movie::findOne($id)) !== null) {
                return $model;
            } else {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
    }
}
