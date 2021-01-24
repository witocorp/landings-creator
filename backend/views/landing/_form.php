<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Landing */
/* @var $form yii\widgets\ActiveForm */
$this->registerCssFile("/path/to/your/file/in/web/folder/style.css");
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
$this->registerJsFile("@web/editor/js/script.js", ['depends' => 'yii\web\JqueryAsset']);
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
<input type="button" id="ver_codigo" value="Create landing" class="btn btn-success pull-right">
<div class="landing-form">
	<h3><i class="fa fa-cog" aria-hidden="true"></i> Options</h3>
    <?php $form = ActiveForm::begin(); ?>
	<div class="col-md-6"><i class="bi bi-align-bottom"></i>
	
		<?= $form->field($model, 'titulo')->textInput(['maxlength' => true]); ?>
	</div>
	<div class="col-md-6">
		<?= $form->field($model, 'dominio')->textInput(['maxlength' => true]); ?>
	</div>
	<div class="col-md-12">
		<?= $form->field($model, 'descripcion')->textarea(['rows' => 3]); ?>
	</div>
    <?= $form->field($model, 'codigo')->hiddenInput()->label(false); ?>
	<div class="text-center">
    <input type="button" id="disena" value="Design landing" class="btn btn-info">  
  </div>
	<div class="row" id="disena_div">
    <h3><i class="fa fa-code" aria-hidden="true"></i> Landing</h3>
      <div class="col-md-2 left_dis">
        <div class="sticky-top">
          <h3 class="text-left marg_compo">Components</h3>
		  <!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  <i class="fa fa-picture-o" aria-hidden="true"></i> Image Library
      </button>
      <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#legalModal">
        <i class="fa fa-file-o" aria-hidden="true"></i> Legal Warning
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
        <div id="editH">
        <div class="col-md-12 text-center banner_head">
          <p>93 000 00 00</p>
        </div>
			<nav class="navbar navbar-expand-lg navbar-light">
			  <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/no-logo.jpg"></a>
        <a class="btn btn-outline-danger d-sm-none" href="#">Commander</a>
				<a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				  <div class="navbar-toggler-icon"></div>
        </a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<a href="#">Item</a>
					<a href="#">Item</a>
					<a href="#">Item</a>
					<a href="#">Item</a>
				  </ul>
					<a class="btn btn-outline-danger d-none d-sm-block" href="#">Commander</a>
				</div>
			  </div>
			</nav>
        </div>
        <main>
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner"> 
              <div class="carousel-item active"> 
                <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> 
                <div class="container"> 
                  <div class="carousel-caption text-start"> 
                    <h1>Example headline.</h1> 
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  
                  </div> 
                </div> 
              </div> 
            </div>
          </div>
          <div id="anexos" class="column">

          </div>
          <div class="container">
            <div class="menu_link" style="position: relative;">
              <img src="img/menu.png">
            </div> 
            <div id="editCt">
              <div class="row py-5"> 
                <div class="col py-5"> 
                  <div class="fdb-box fdb-touch"> 
                    <div class="row text-center justify-content-center"> 
                      <div class="col-12 col-md-9 col-lg-7"> 
                        <h1>Contact Us</h1> 
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus.</p> 
                      </div> 
                    </div> 
                    <div class="row justify-content-center pt-4"> 
                      <div class="col-12 col-md-8"> 
                        <form> 
                          <div class="row"> 
                            <div class="col-12 col-md"> 
                              <input id="nombre_form" type="text" class="form-control" placeholder="Name"> 
                            </div> 
                            <div class="col-12 col-md mt-4 mt-md-0"> 
                              <input id="apellido_form" type="text" class="form-control" placeholder="Surname"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="telefono_form" type="text" class="form-control" placeholder="Phone"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="email_form" type="email" class="form-control" placeholder="Email"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="direccion_form" type="text" class="form-control" placeholder="Address"> 
                            </div> 
                          </div>
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="nacimiento_form" type="date" class="form-control" placeholder="Birthdate"> 
                            </div> 
                          </div> 
                          <div id="addtoform" class="mt-4"></div>
                          <div class="row mt-4"> 
                            <div class="col text-center"> 
                              <button id="enviar_form" type="submit" class="btn btn-primary">Submit</button> 
                            </div> 
                          </div> 
                        </form> 
                      </div> 
                    </div> 
                  </div> 
                </div> 
              </div>
            </div>
          </div>
        </main>
        <footer id="editF">
            <div class="container">
              <div class="row align-items-top text-center text-md-left">
                <div class="col-12 col-sm-6 col-md-4">
                  <h3><strong>Country A</strong></h3>
                  <p>Street Address 52<br>Contact Name</p>
                  <p>+44 827 312 5002</p>
                  <p><a href="#">countrya@amazing.com</a></p>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0">
                  <h3><strong>Country B</strong></h3>
                  <p>Street Address 100<br>Contact Name</p>
                  <p>+13 827 312 5002</p>
                  <p><a href="#">countryb@amazing.com</a></p>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-md-0 text-md-left">
                  <h3><strong>About Us</strong></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col text-center">
                  © 2021. All Rights Reserved
                </div>
              </div>
            </div>
        </footer>
        <div class="modal" id="legalModal" tabindex="-1" aria-labelledby="legalModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="legalModal">legal warning</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales purus viverra dapibus maximus. Nam et sem mi. Curabitur mauris orci, faucibus id quam eget, ultrices auctor metus. Quisque ut maximus mauris. Nam tempor sed leo nec pulvinar. Ut placerat congue augue vel gravida. Curabitur lacinia vehicula ipsum, ac bibendum neque pharetra at.

                Fusce vel viverra nibh. Maecenas et neque sagittis est ultrices aliquam bibendum posuere mi. Etiam eu sapien est. Aenean cursus, augue quis consectetur gravida, erat turpis porta erat, quis volutpat velit justo at turpis. Proin luctus augue eros, ut tincidunt justo sodales luctus. Donec vehicula pulvinar fringilla. Nunc tincidunt tristique neque nec eleifend. Vivamus lorem eros, scelerisque et euismod sit amet, volutpat id ante. Pellentesque eu varius mauris. Integer sodales ipsum nisl.

                Donec suscipit tristique sem. Donec et laoreet ante. Mauris porta tellus eu iaculis tempor. Vivamus laoreet lorem ante, eu facilisis eros sagittis eget. Suspendisse eu tortor ut nunc semper dignissim et eu quam. Curabitur sed felis sed eros scelerisque aliquam. Donec auctor erat vitae interdum pretium. Cras luctus magna et viverra porta. In hac habitasse platea dictumst. Nunc arcu lorem, accumsan sit amet mauris nec, lacinia dapibus nibh. Cras consectetur tristique venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

                Duis vel leo hendrerit, tempus lorem vitae, laoreet quam. Nullam pulvinar pellentesque tellus ut eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi quam orci, ornare in ultricies sed, consectetur vel ipsum. Etiam egestas ex in nisl feugiat, at viverra lorem dictum. Donec lacinia faucibus egestas. Cras efficitur, felis in cursus interdum, urna ligula commodo ex, non bibendum tellus lorem et diam. Aliquam id massa vitae nisi imperdiet mollis. Mauris vitae luctus sem, non rhoncus nibh. Vestibulum condimentum ultricies diam, vel mattis odio. Fusce nec orci condimentum, semper enim a, consectetur lacus. Duis commodo efficitur condimentum. Nunc vulputate sodales purus, at placerat lacus porttitor quis. Nunc quis neque at dolor fringilla sollicitudin. Sed fringilla cursus blandit. Phasellus in bibendum velit, eget laoreet risus.
              </p>
            <div class="card_group row">
              
            </div>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
         </div>


      </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
