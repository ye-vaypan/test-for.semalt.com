<?php

namespace app\controllers;

use app\models\TestOne;
use app\models\TestTwo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
     * {@inheritdoc}
     */
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
     * @return string
     */
    public function actionIndex()
    {

        $model = new TestOne();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $students =  $model->calculate($model->totalPeople, $model->percentSportPeople);

            return $this->render('index', [
                'model' => $model,
                'students' => $students,
            ]);
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionTest2()
    {
        $model = new TestTwo();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $enteredStr =  $model->findNumInString($model->enteredString);

            return $this->render('test-2', [
                'model' => $model,
                'str' => $enteredStr,
            ]);
        }
        return $this->render('test-2', [
            'model' => $model,
        ]);
    }

    public function actionTest3()
    {
        return $this->render('test-3');
    }

    public function actionTest4()
    {
        return $this->render('test-4');
    }

    public function actionTest5()
    {
        return $this->render('test-5');
    }

    public function actionTest6()
    {
        return $this->render('test-6');
    }

    public function actionTest7()
    {
        return $this->render('test-7');
    }

    public function actionTest8()
    {
        return $this->render('test-8');
    }

    public function actionTest9()
    {
        return $this->render('test-9');
    }

    public function actionSqlTest()
    {
        return $this->render('sql-test');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
