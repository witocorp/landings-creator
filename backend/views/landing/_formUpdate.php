<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Landing */
/* @var $form yii\widgets\ActiveForm */
$this->registerCssFile("@web/editor/css/froala_editor.css" );
$this->registerCssFile("@web/editor/css/froala_style.css");
$this->registerCssFile("@web/editor/css/plugins/code_view.css");
$this->registerCssFile("@web/editor/css/plugins/colors.css");
$this->registerCssFile("@web/editor/css/plugins/emoticons.css");
$this->registerCssFile("@web/editor/css/plugins/image_manager.css");
$this->registerCssFile("@web/editor/css/plugins/image.css");
$this->registerCssFile("@web/editor/css/plugins/line_breaker.css");
$this->registerCssFile("@web/editor/css/plugins/quick_insert.css");
$this->registerCssFile("@web/editor/css/plugins/table.css");
$this->registerCssFile("@web/editor/css/plugins/file.css");
$this->registerCssFile("@web/editor/css/plugins/char_counter.css");
$this->registerCssFile("@web/editor/css/plugins/video.css");
$this->registerCssFile("@web/editor/css/plugins/emoticons.css");
$this->registerCssFile("@web/editor/css/plugins/fullscreen.css");
$this->registerJsFile("https://code.jquery.com/ui/1.12.1/jquery-ui.js");
$this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/froala_editor.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/align.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/code_beautifier.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/code_view.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/colors.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/emoticons.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/draggable.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/font_size.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/font_family.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/image.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/image_manager.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/line_breaker.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/quick_insert.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/link.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/lists.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/paragraph_format.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/paragraph_style.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/video.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/table.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/url.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/emoticons.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/file.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/entities.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/inline_style.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/save.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/fullscreen.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/script_update.js", ['depends' => 'yii\web\JqueryAsset']);
?>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Image Library</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<form id="save_image" action="#" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<input class="form-control" type="file" id="img_library" name="image">
			</div>
			<button type="submit" class="btn btn-primary">
			  <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload file
			</button>
		</form>
		<div class="card_group row">
			
		</div>
		</div>
	  </div>
	  <div class="modal-footer">
		
	  </div>
	</div>
 </div>
  <div class="modal" id="CopyLink" tabindex="-1" aria-labelledby="CopyLink" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enlace copiado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>
 </div>
<input type="button" id="ver_codigo" value="Update landing" class="btn btn-success pull-right">
<div class="landing-form">
	<h3><i class="fa fa-cog" aria-hidden="true"></i> Options</h3>
    <?php $form = ActiveForm::begin(); ?>
	<div class="col-md-4"><i class="bi bi-align-bottom"></i>

		<?= $form->field($model, 'titulo')->textInput(['maxlength' => true]); ?>
	</div>
	<div class="col-md-4">
		<?= $form->field($model, 'dominio')->textInput(['maxlength' => true, 'readonly'=> true]); ?>
	</div>
	<div class="col-md-4">
    <?= $form->field($model, 'color')->textInput(['maxlength' => true]); ?>
  </div>
  <div class="col-md-12">
		<?= $form->field($model, 'descripcion')->textarea(['rows' => 3]); ?>
	</div>
    <?= $form->field($model, 'codigo')->hiddenInput()->label(false); ?>
	
	<h3><i class="fa fa-code" aria-hidden="true"></i> Landing</h3>
  <div class="alert alert-warning mt-5" role="alert">
    <p class="text-center">El script de shopify carga un iframe al inicializar la página. Para evitar un duplicado de productos presionar el siguiente botón.
  </p>
<button type="button" class="btn btn-secondary centrado mt-3" id="borrar_duplicados">Borrar duplicados</button></div>
	 <div class="row">
      <div class="col-md-2 left_dis">
        <div class="sticky-top">
          <h3 class="text-left marg_compo">Components</h3>
		  <!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  <i class="fa fa-picture-o" aria-hidden="true"></i> Image Library
			</button>
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#legalModal">
        <i class="fa fa-file-o" aria-hidden="true"></i> Legal Warning
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#cookiesModal">
      <i class="fa fa-file-o" aria-hidden="true"></i> Política Cookies
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#privacidadModal">
      <i class="fa fa-file-o" aria-hidden="true"></i> Política privacidad
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#garantiaModal">
      <i class="fa fa-file-o" aria-hidden="true"></i> Garantía
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#ventaModal">
      <i class="fa fa-file-o" aria-hidden="true"></i> Condiciones venta
      </button>
          <h5 class="text-left my-md-3">Slide</h5>
          <div class="text-left my-md-3">
            <img src="img/slide.png" id="c1" class="img-responsive"/>
          </div>
          <div class="text-left my-md-3">
            <img src="img/slide_2.png" id="c2" class="img-responsive"/>
          </div>
          <div class="text-left my-md-3">
            <img src="img/slide_3.png" id="c3" class="img-responsive"/>
          </div>
          <h5 class="text-left my-md-3">Título</h5>
          <div class="text-left my-md-3">
            <img
              src="img/titulo.png"
              id="t1"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <h5 class="text-left my-md-3">Contenido</h5>
          <div class="text-left my-md-3">
            <img
              src="img/contenido.png"
              id="cn1"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/texto_doble.png"
              id="cn2"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/texto_imagen_1.png"
              id="cn3"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/texto_imagen_2.png"
              id="cn4"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/texto_imagen_3.png"
              id="cn5"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/c6.png"
              id="cn6"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <div class="text-left my-md-3">
            <img
              src="img/html_shopify.png"
              id="cn7"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
           <h5 class="text-left my-md-3 text-center">Contacto</h5>
          <div class="text-left my-md-3">
            <img
              src="img/contacto.png"
              id="cn8"
              style="border: 1px solid; cursor: pointer" class="img-responsive"
            />
          </div>
          <h5 class="text-left my-md-3">Title options</h5>
          <div class="text-left my-md-3">
            <input type="text" id="titleOptions" class="form-control" placeholder="Title">
            <button type="button" id="addTitle" class="btn btn-primary centrado my-md-2">Add</button>
          </div>
          <h5 class="text-left my-md-3">Add option</h5>
          <div class="text-left my-md-3">
            <input type="text" id="newOption" class="form-control" placeholder="Option">
            <input type="text" id="newValue" class="form-control my-md-2" placeholder="Value">
            <button type="button" id="addOption" class="btn btn-primary centrado">Add</button>
          </div>
        </div>
      </div>
      <div class="col h-100 block-design" id="code_html">
        <?php echo $model->codigo;?>
      </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
