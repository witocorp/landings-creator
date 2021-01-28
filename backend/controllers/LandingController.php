<?php

namespace backend\controllers;

use Yii;
use backend\models\Landing;
use backend\models\LandingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\filters\AccessControl;
use backend\models\Email;
use backend\models\EmailSearch;
/**
 * LandingController implements the CRUD actions for Landing model.
 */
class LandingController extends Controller
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
                        'actions' => ['view', 'index', 'create', 'update', 'delete'],
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
     * Lists all Landing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LandingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $searchEmail = new EmailSearch(['idLanding' => 0,]);
        $EmailProvider = $searchEmail->search(Yii::$app->request->queryParams);
        foreach($EmailProvider->getModels() as $datoE):
            $email = $datoE->email;
            $carbon = $datoE->carbon;
        endforeach;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'email' => $email,
            'carbon' => $carbon,
        ]);
    }

    /**
     * Displays a single Landing model.
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
     * Creates a new Landing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$model = new Landing();
		if ($model->load(Yii::$app->request->post())) {
            $model->save();
			$url = $_SERVER['DOCUMENT_ROOT']."/landings/".$model->dominio;
			mkdir($url, 0755);
			$contenido = '<!doctype html> <html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <title>'.$model->titulo.'</title> <meta name="description" content="'.$model->descripcion.'"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link href="../assets/style.css" rel="stylesheet"><!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"></head><body data-id-landing="'.$model->id.'">';
			$contenido .= $model->codigo;
			$contenido .= '<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script><script src="../assets/script.js" ></script></body></html>';
			$myfile = fopen($url."/index.html", "w") or die("Unable to open file!");
			fwrite($myfile, $contenido);
			fclose($myfile);
			$model->save();
			//xavi
			return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
		
        /*$model = new Landing();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);*/
    }

    /**
     * Updates an existing Landing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $url = $_SERVER['DOCUMENT_ROOT']."/landings/".$model->dominio;
			unlink($url.'/index.html');
			$contenido = '<!doctype html> <html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <title>'.$model->titulo.'</title> <meta name="description" content="'.$model->descripcion.'"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link href="../assets/style.css" rel="stylesheet"><link href="../assets/cookie-banner.css" rel="stylesheet"><!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"></head><body data-id-landing="'.$model->id.'">';
			$contenido .= $model->codigo;
            $banner = "<div class='nk-cookie-banner alert alert-warning mb-0 row' role='alert'><div class='col-md-9'> Nous utilisons nos propres cookies et ceux de tiers, à la fois persistants et de session, pour des raisons techniques de personnalisation, d'analyse, de publicité et pour partager du contenu sur les réseaux sociaux et générer des informations de profil spécifiques en fonction des préférences de navigation de l'utilisateur. Si vous acceptez l'installation de cookies ou continuez à naviguer, nous considérons que vous acceptez leur utilisation. <a href='#cookiesModal'>Plus d'informations</a></div><div class='col-md-9'> <button type='button' class='btn btn-primary btn-sm ml-3' onclick='window.nk_hideCookieBanner()''> J'ACCEPTE </button> </div></div>"; 
			$contenido .= $banner.'<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script><script src="../assets/script.js" ></script><script src="../assets/cookie-banner.js" ></script></body></html>';
			$myfile = fopen($url."/index.html", "w") or die("Unable to open file!");
			fwrite($myfile, $contenido);
			fclose($myfile);
			return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Landing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
		$url = $_SERVER['DOCUMENT_ROOT']."/landings/".$model->dominio;
		unlink($url.'/index.html');
		rmdir($url);
		$model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Landing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Landing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Landing::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
