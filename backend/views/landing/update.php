<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Landing */

$this->title = 'Update Landing: ' . $model->id;
?>
<div class="landing-update">

    <?= $this->render('_formUpdate', [
        'model' => $model,
    ]) ?>

</div>
