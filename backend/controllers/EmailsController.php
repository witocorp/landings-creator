<?php

namespace backend\controllers;

use Yii;
use backend\models\Emails;
use backend\models\EmailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Landing;
use backend\models\LandingSearch;
use yii\filters\AccessControl;
use backend\models\Email;
use backend\models\EmailSearch;

/**
 * EmailsController implements the CRUD actions for Emails model.
 */
class EmailsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
			'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['view', 'index', 'create', 'update', 'delete', 'envio'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Emails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $landing = Yii::$app->request->get('id');
        echo $landing;
        /*$searchModel = new EmailsSearch(['idLanding' => $landing,]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$searchLanding = new LandingSearch(['id' => $landing,]);
		$LandingProvider = $searchLanding->search(Yii::$app->request->queryParams);
		foreach($LandingProvider->getModels() as $dato):
			$nombre = $dato->dominio;
		endforeach;
        $searchEmail = new EmailSearch(['idLanding' => $landing,]);
        $EmailProvider = $searchEmail->search(Yii::$app->request->queryParams);
        foreach($EmailProvider->getModels() as $datoE):
            $email = $datoE->email;
            $carbon = $datoE->carbon;
        endforeach;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'nombre' => $nombre,
            'email' => $email,
            'carbon' => $carbon,
        ]);*/
    }

    /**
     * Displays a single Emails model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Email model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionEnvio()
    {
        $searchEmail = new EmailSearch(['idLanding' => $_POST['id'],]);
        $EmailProvider = $searchEmail->search(Yii::$app->request->queryParams);
        $id = 0;
        foreach($EmailProvider->getModels() as $dato):
            $id = $dato->id;
        endforeach;
        if($id !==0){
            $model = Email::find()->where(['id' => $id])->one();
        }else{
            $model = new Email();
        }
        $model->email = $_POST['email'];
        $model->carbon = $_POST['carbon'];
        $model->idLanding = $_POST['id'];
        $model->save();
        
    }

    /**
     * Creates a new Emails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Emails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Emails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Emails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $correo = $this->findModel($id);
        $idL = $correo->idLanding; 
        $correo->delete();
        return $this->redirect(['index', 'id' => $idL]);
    }

    /**
     * Finds the Emails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Emails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Emails::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
