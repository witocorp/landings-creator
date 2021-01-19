<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/fa197de1b6.js"></script>
	
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
	<div class="container">
	  <h3 class="float-md-start mb-0"><a href="/backend/web">Landing Creator<a/></h3>
	  <nav class="nav nav-masthead justify-content-center float-md-end">
		<?php 
			if (Yii::$app->user->isGuest) {
				Html::a('Login', ['/site/login']);
			} else {?>
				<a href="<?php echo Url::base(true).'/index.php?r=site/logout'?>" data-method="post"
			  ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
		<?php 
			}
		?>
	  </nav>
	</div>
</header>
<div class="wrap">
	<div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right">Powered by <a href="https://fantasticfy.com" target="_blank" style="text-decoration: none;"> Fantasticfy.com</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
<?php $this->endPage() ?>
