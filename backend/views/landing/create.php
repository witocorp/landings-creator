<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Landing */

$this->title = 'Create Landing';
?>
<div class="landing-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
