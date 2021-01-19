<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LandingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Landings';
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="landing-index">

  <div class="row">
    <div class="col text-left">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="col text-right">
      <p>
        <?= Html::a('<i class="fa fa-plus-circle" aria-hidden="true"></i> Create Landing', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
      </p>
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

  <?php Pjax::begin(); ?>
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
      'dominio',
      'titulo',

      [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{ver} {contacts} {update} {delete}',
         'buttons'=>[
            'ver' => function ($url, $model) {     
                  return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 'http://'.$model->dominio, [
                      'title' => Yii::t('yii', '', ),'target'=>'_blank']);                                
              },
            'contacts' => function ($url, $model) {     
                  return Html::a('<span class="glyphicon glyphicon-envelope"></span>', Url::base(true).'/index.php?r=emails%2Findex&id='.$model->id, [
                      'title' => Yii::t('yii', '', ),'data-pjax' => 0]);                                
              }
          ],
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
              data: { id: 0, email: $('#emailAdmin').val(), carbon: $('#ccAdmin').val() }
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