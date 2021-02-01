<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $nombre;
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="emails-index">

  <h1 class="mb-5"><?= Html::encode($this->title) ?>: Contact list</h1>

  <?php Pjax::begin(); ?>
  <?php // echo $this->render('_search', ['model' => $searchModel]); 
  ?>

  <div class="row">
    <div class="col">
      <script type="text/javascript">
        google.charts.load("current", {
          packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["Day", "Emails", {
              role: "style"
            }],
            <?php
            $row = Yii::$app->db->createCommand('SELECT fecha,COUNT(*) FROM emails WHERE idLanding = ' . Yii::$app->request->get('id') . ' GROUP BY fecha')->queryAll();
            if (count($row) > 0) {
              foreach ($row as $val) {
                echo '["' . $val["fecha"] . '", ' . $val["COUNT(*)"] . ', "#dc3545"],';
              }
            } else {
              echo '["",0, "#dc3545"],';
            }

            ?>
          ]);

          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
            {
              calc: "stringify",
              sourceColumn: 1,
              type: "string",
              role: "annotation"
            },
            2
          ]);

          var options = {
            title: "Emails last days",
            bar: {
              groupWidth: "95%"
            },
            legend: {
              position: "none"
            },
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_show"));
          chart.draw(view, options);
        }
      </script>
      <div id="columnchart_show" style="width: 100%;"></div>
    </div>
  </div>
  <div class="row my-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Write an email to export the data by email
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">
            <div id="alert_added" class="alert alert-success" role="alert">
              Email Address Added
            </div>
            <form class="row g-3">
              <div class="col-auto">
                <input type="email" class="form-control" id="emailAdmin" placeholder="Email" value="<?php echo $email;?>">
              </div>
              <div class="col-auto">
                <input type="email" class="form-control" id="ccAdmin" placeholder="CC" value="<?php echo $carbon;?>">
              </div>
              <div class="col-auto">
                <button type="button" id="guardar_correo" class="btn btn-primary mb-3">Save</button>
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
       [
            'attribute'=>'Fnacimiento',
            'header'=>'F. Nacimiento',
            'format'=>'raw',    
            'value' => function($model, $key, $index)
            {   
                    if($model->fnacimiento === "9999-09-09"){
                        return "";
                    }else{
                        return $model->fnacimiento;
                    }
            },
       ],
      'opciones',

      [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{delete}',
      ],
    ],
  ]); ?>

  <?php Pjax::end(); ?>
    <?php
    $this->registerJs(" 
        function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email)) {
            return false;
          }else{
            return true;
          }
        }
        $(document).ready(function () {
         $('#alert_added').hide();

         $('#guardar_correo').on('click', function(){
          if(!IsEmail($('#emailAdmin').val())){
            $('#emailAdmin').addClass('border-danger');
          }else if(!IsEmail($('#ccAdmin').val())) {
            $('#ccAdmin').addClass('border-danger');
          }else{
            $.ajax({
              method: 'POST',
              url: 'https://landingfy-creator.com/backend/web/index.php?r=emails%2Fenvio',
              data: { id: ".Yii::$app->request->get('id').", email: $('#emailAdmin').val(), carbon: $('#ccAdmin').val() }
            })
            .done(function( msg ) {
              $('#alert_added').show();
              $('#emailAdmin').removeClass('border-danger');
              $('#ccAdmin').removeClass('border-danger');
              console.log(msg);
            });
          }
          
         });
});", \yii\web\View::POS_READY);

    ?>
</div>
