<?php

/**
 * Team:DBIS, NKU
 * Coding by niepeng 016096, 20170703
 * This is the main controller
 */

namespace frontend\controllers;

use frontend\models\Gufei;
use frontend\models\GufeiB;
use frontend\models\GufeiG;
use frontend\models\GufeiM;
use frontend\models\Gufei1;
use frontend\models\GufeiB1;
use frontend\models\GufeiG1;
use frontend\models\GufeiM1;
use frontend\models\Gufei2;
use frontend\models\GufeiB2;
use frontend\models\GufeiG2;
use frontend\models\GufeiM2;
use frontend\models\Gufei3;
use frontend\models\GufeiB3;
use frontend\models\GufeiG3;
use frontend\models\GufeiM3;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Message;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = "main_layout";
    //public $layout = "main";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
	public function actionTeamshow()
    {
        $msgList=Message::findByReceiver();
        return $this->render('teamshow',
            ['msgList'=>$msgList]
            );
    }
	public function actionGfindex()
    {
        /* $msgList=Gufei::findByReceiver();
        return $this->render('gfindex',
            ['msgList'=>$msgList]
            ); */
		$msgList=Gufei::findByReceiver();
		$msgListB=GufeiB::findByReceiver();
		$msgListM=GufeiM::findByReceiver();
		$msgListG=GufeiG::findByReceiver();
        return $this->render('gfindex',
            ['msgList'=>$msgList,
			'msgListB'=>$msgListB,
			'msgListM'=>$msgListM,
			'msgListG'=>$msgListG]
            );
    }
	public function actionWmpindex()
    {
        /* $msgList=Gufei::findByReceiver();
        return $this->render('gfindex',
            ['msgList'=>$msgList]
            ); */
		$msgList=Gufei1::findByReceiver();
		$msgListB=GufeiB1::findByReceiver();
		$msgListM=GufeiM1::findByReceiver();
		$msgListG=GufeiG1::findByReceiver();
        return $this->render('wmpindex',
            ['msgList'=>$msgList,
			'msgListB'=>$msgListB,
			'msgListM'=>$msgListM,
			'msgListG'=>$msgListG]
            );
    }
	public function actionWzcindex()
    {
        /* $msgList=Gufei::findByReceiver();
        return $this->render('gfindex',
            ['msgList'=>$msgList]
            ); */
		$msgList=Gufei2::findByReceiver();
		$msgListB=GufeiB2::findByReceiver();
		$msgListM=GufeiM2::findByReceiver();
		$msgListG=GufeiG2::findByReceiver();
        return $this->render('wzcindex',
            ['msgList'=>$msgList,
			'msgListB'=>$msgListB,
			'msgListM'=>$msgListM,
			'msgListG'=>$msgListG]
            );
    }
	public function actionWwhindex()
    {
        /* $msgList=Gufei::findByReceiver();
        return $this->render('gfindex',
            ['msgList'=>$msgList]
            ); */
		$msgList=Gufei3::findByReceiver();
		$msgListB=GufeiB3::findByReceiver();
		$msgListM=GufeiM3::findByReceiver();
		$msgListG=GufeiG3::findByReceiver();
        return $this->render('wwhindex',
            ['msgList'=>$msgList,
			'msgListB'=>$msgListB,
			'msgListM'=>$msgListM,
			'msgListG'=>$msgListG]
            );
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionIndex()
    {
        //$this->layout = "main_layout";
        \YII::beginProfile('profile0');
        echo 'hello';
        \Yii::Warning('Hello, I am a test log message');
        \YII::endProfile('profile0');
        //return $this->render('index');
        return $this->runAction('teamshow');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        //$this->layout = "main2";
        return $this->render('about');
    }


    /** 
     * Displays teamwork page.
     */
    public function actionTeamwork()
    {
        return $this->render('teamwork');
    }

    /** 
     * Displays teamShow page.
     */


     /** 
     * Displays personal page.
     */
    public function actionPersonalwork1()
    {
        return $this->render('personalwork1');
    }

    public function actionPersonalwork2()
    {
        return $this->render('personalwork2');
    }

    public function actionPersonalwork3()
    {
        return $this->render('personalwork3');
    }

    public function actionPersonalwork4()
    {
        return $this->render('personalwork4');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}

