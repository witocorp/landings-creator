<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Libreria */

$this->title = 'Create Libreria';
$this->params['breadcrumbs'][] = ['label' => 'Librerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libreria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
