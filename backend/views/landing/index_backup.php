<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LandingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Landings';
?>
<div class="landing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-plus-circle" aria-hidden="true"></i> Create Landing', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p>
	<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
			foreach ($dataProvider->models as $model):
		?>	
			<div class="col">
			  <div class="card shadow-sm">
				<div class="card-body text-center">
				  <h1 class="box_texto"><?php echo $model->titulo;?></h1>
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group centrado box_botones">
						<button type="button" class="btn btn-sm btn-outline-secondary">
							<i class="fa fa-eye" aria-hidden="true"></i> 
								<a href="http://<?php echo $model->dominio;?>" target="_blank">View</a>
						</button>
						<button type="button" class="btn btn-sm btn-outline-secondary">
							<i class="fa fa-bar-chart" aria-hidden="true"></i> Stats
						</button>
						<button type="button" class="btn btn-sm btn-outline-secondary">
							<a href="/backend/web/index.php?r=landing%2Fupdate&amp;id=<?php echo $model->id;?>">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
							</a>
						</button>
						<button type="button" class="btn btn-sm btn-outline-secondary">
							<a href="/backend/web/index.php?r=landing%2Fdelete&amp;id=<?php echo $model->id;?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post">
								<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
							</a>
							
						</button>		
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php
			endforeach;
		?>
      </div>
    </div>

</div>
