<?php

namespace backend\controllers;

use Yii;
use app\models\ShowMovie;
use app\models\ShowMovieSearch;
use app\models\ShowLikem;
use app\models\ShowGame;
use app\models\ShowGameSearch;
use app\models\ShowLikeg;
use app\models\ShowBook;
use app\models\ShowBookSearch;
use app\models\ShowLikeb;
use app\models\ShowStudent;
use app\models\ShowStudentSearch;
use app\models\ShowTeam;
use app\models\ShowTeamSearch;
use app\models\InfoStudent;
use app\models\InfoStudentSearch;
use app\models\InfoTeam;
use app\models\InfoTeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestController implements the CRUD actions for ShowGame model.
 */
class TtController extends Controller
{
	public $layout="main_layout";

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
	 * Lists all ShowGame models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new ShowMovieSearch();
		//$searchModel = new InfoStudentSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
			]);
	}

	/**
	 * Displays a single ShowGame model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
			]);
	}
	public function actionViewt($id)
	{
		return $this->render('viewt', [
			'modelt' => $this->findModelt($id),
			'modelit' => $this->findModelit($id),
			]);
	}

	/**
	 * Creates a new ShowGame model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreateu()
	{
		$modelis = new infoStudent();
		$models = new ShowStudent();
		$modelb = new ShowBook();
		$modelg = new ShowGame();
		$modelm = new ShowMovie();
		$modellb = new ShowLikeb();
		$modellg = new ShowLikeg();
		$modellm = new ShowLikem();

		if (   $modelis->load(Yii::$app->request->post())
			&& $models->load(Yii::$app->request->post())
			&& $modelg->load(Yii::$app->request->post())
			&& $modelm->load(Yii::$app->request->post())
			&& $modelb->load(Yii::$app->request->post())
			)
		{
			$modelis->save();
			$modelg->save();
			$modelm->save();
			$modelb->save();

			$id=$modelis->teamId;
			$modelit = $this->findModelit($id);
			$modelit->memberNum = $modelit->memberNum + 1;
			$models->stuId = $modelis->stuId;
			$modellg->stuId = $models->stuId;
			$modellg->gameId = $modelg->gameId;
			$modellb->stuId = $models->stuId;
			$modellb->bookId = $modelb->bookId;
			$modellm->stuId = $models->stuId;
			$modellm->movieId = $modelm->movieId;

			$models->save();
			$modellg->save();
			$modellm->save();
			$modellb->save();
			$modelit->save();

			return $this->redirect(['viewu', 'id' => $modelis->stuId]);
		}
		else 
		{
			return $this->render('createu', [
				'modelis' => $modelis,
				'models' => $models,
				'modelb' => $modelb,
				'modelm' => $modelm,
				'modelg' => $modelg,
				]);
		}
	}

	public function actionCreatet()
	{
		$modelit = new InfoTeam();
		$modelt = new ShowTeam();
		if ($modelit->load(Yii::$app->request->post()) && $modelt->load(Yii::$app->request->post()))
		{
			$modelit->memberNum=0;
			$modelit->save();
			$modelt->teamId=$modelit->teamId;
			$modelt->save();
			return $this->redirect(['viewt', 'id' => $modelit->teamId]);
		} else {
			return $this->render('createt', [
				'modelit' => $modelit,
				'modelt' => $modelt,
			]);
		}
		// $modelit = new InfoTeam();

		// $modelt = new ShowTeam();
		// if (   $modelit->load(Yii::$app->request->post())
		// 	//&& $modelt->load(Yii::$app->request->post())
		// 	)
		// {
		// 	$modelit->save();
		// 	//$id=$modelit->teamId;
		// 	$id=1;
		// 	//$modelt->teamId = $modelit->teamId;
		// 	//$modelit->memberNum=0;
		// 	//$modelit->save();
		// 	//$modelt->save();

		// 	return $this->redirect(['view', 'id' => $id]);
		// }
		// else 
		// {
		// 	return $this->render('createt', [
		// 		'modelit' => $modelit,
		// 		'modelt' => $modelt,
		// 		]);
		// }
	}



	/**
	 * Updates an existing ShowGame model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdatet($id)
	{
		// $modelg = $this->findModelg($id);
		// $modelm = $this->findModelm($id);

		// if ($modelg->load(Yii::$app->request->post()) && $modelg->save()) {
		// 	return $this->redirect(['view', 'id' => $modelg->gameId]);
		// } else {
		// 	return $this->render('update', [
		// 		'model' => $modelg,
		// 		'modelg' => $modelg,
		// 		'modelm' => $modelm,
		// 		]);
		// }
		$modelit = $this->findModelit($id);
		$modelt = $this->findModelt($id);
		if ($modelit->load(Yii::$app->request->post()) && $modelt->load(Yii::$app->request->post()))
		{
			$modelit->save();
			$modelt->teamId=$modelit->teamId;
			$modelt->save();
			return $this->redirect(['view', 'id' => $modelit->teamId]);
		} else {
			return $this->render('updatet', [
				'modelit' => $modelit,
				'modelt' => $modelt,
			]);
		}

	}

	public function actionUpdateu($id)
	{
		$modelis = $this->findModelis($id);
		$models = $this->findModels($id);
		$modelb = new ShowBook();
		$modelg = new ShowGame();
		$modelm = new ShowMovie();
		$modellb = new ShowLikeb();
		$modellg = new ShowLikeg();
		$modellm = new ShowLikem();

		if (   $modelis->load(Yii::$app->request->post())
			&& $models->load(Yii::$app->request->post())
			&& $modelg->load(Yii::$app->request->post())
			&& $modelm->load(Yii::$app->request->post())
			&& $modelb->load(Yii::$app->request->post())
			)
		{
			$modelis->save();
			$modelg->save();
			$modelm->save();
			$modelb->save();

			$id=$modelis->teamId;
			$modelit = $this->findModelit($id);
			$modelit->memberNum = $modelit->memberNum + 1;
			$models->stuId = $modelis->stuId;
			$modellg->stuId = $models->stuId;
			$modellg->gameId = $modelg->gameId;
			$modellb->stuId = $models->stuId;
			$modellb->bookId = $modelb->bookId;
			$modellm->stuId = $models->stuId;
			$modellm->movieId = $modelm->movieId;

			$models->save();
			$modellg->save();
			$modellm->save();
			$modellb->save();
			$modelit->save();

			return $this->redirect(['viewu', 'id' => $modelis->stuId]);
		}
		else 
		{
			return $this->render('updateu', [
				'modelis' => $modelis,
				'models' => $models,
				'modelb' => $modelb,
				'modelm' => $modelm,
				'modelg' => $modelg,
				]);
		}
	}

	/**
	 * Deletes an existing ShowGame model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the ShowGame model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return ShowGame the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = ShowGame::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModelg($id)
	{
		if (($model = ShowGame::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModelm($id)
	{
		if (($model = ShowMovie::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModelit($id)
	{
		if (($model = InfoTeam::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModelt($id)
	{
		if (($model = ShowTeam::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModelis($id)
	{
		if (($model = InfoStudent::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	protected function findModels($id)
	{
		if (($model = ShowStudent::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
