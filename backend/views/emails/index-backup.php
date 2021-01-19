<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails';
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="emails-index">

    <h1><?= Html::encode($this->title) ?></h1>

   
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

      <div class="row">
                <div class="col">
                    <script type="text/javascript">
                        google.charts.load("current", {packages:['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                            ["Day", "Emails", { role: "style" } ],
                            <?php
                              $row = Yii::$app->db->createCommand('SELECT fecha,COUNT(*) FROM emails WHERE idLanding = '.Yii::$app->request->get('id').' GROUP BY fecha')->queryAll();
                              if(count($row)>0){
                                foreach ($row as $val) {
                                  echo '["'.$val["fecha"].'", '.$val["COUNT(*)"].', "#dc3545"],';
                                }  
                              }else{
                                  echo '["",0, "#dc3545"],';
                              }
                              
                            ?>
                          ]);

                          var view = new google.visualization.DataView(data);
                          view.setColumns([0, 1,
                                           { calc: "stringify",
                                             sourceColumn: 1,
                                             type: "string",
                                             role: "annotation" },
                                           2]);

                          var options = {
                            title: "Emails last days",
                            bar: {groupWidth: "95%"},
                            legend: { position: "none" },
                          };
                          var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_<?php echo $idD;?>"));
                          chart.draw(view, options);
                      }
                    </script>
                    <div id="columnchart_<?php echo $idD;?>" style="width: 100%;"></div>
                </div>
              </div>
	<div class="container">
		<div class="accordion accordion-flush" id="accordionFlushExample">
		  <div class="accordion-item">
			<h2 class="accordion-header" id="flush-headingOne">
			  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
				Admin email
			  </button>
			</h2>
			<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
				<div class="accordion-body">
					<form class="row g-3">
					  <div class="col-auto">
						<input type="email" class="form-control" id="emailAdmin" placeholder="Email">
					  </div>
					  <div class="col-auto">
						<button type="submit" class="btn btn-primary mb-3">Save</button>
					  </div>
					</form>
				</div>
			</div>
		  </div>
		  
		  
		</div>
	</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'nombre',
            'apellido',
            'telefono',
            'email:email',
            'direccion',
            //'idLanding',
            'fecha',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{delete}',],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
