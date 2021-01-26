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
                              <input id="nombre_form" type="text" class="form-control" placeholder="Nom"> 
                            </div> 
                            <div class="col-12 col-md mt-4 mt-md-0"> 
                              <input id="apellido_form" type="text" class="form-control" placeholder="Le nom"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="telefono_form" type="text" class="form-control" placeholder="Téléphone"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="email_form" type="email" class="form-control" placeholder="Email"> 
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <input id="direccion_form" type="text" class="form-control" placeholder="Adresse"> 
                            </div> 
                          </div>
                          <div class="row mt-4"> 
                            <div class="col">
                              <label>Date de naissance</label>
                              <input id="nacimiento_form" type="date" class="form-control" placeholder="Date de naissance"> 
                            </div> 
                          </div> 
                          <div id="addtoform" class="mt-4"></div>
                          <div class="row mt-4"> 
                            <div class="col"> 
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="polPri">
                                <label class="form-check-label" for="flexCheckDefault">
                                    J'accepte la politique de confidentialité
                                </label>
                              </div>
                            </div> 
                          </div> 
                          <div class="row mt-4"> 
                            <div class="col text-center"> 
                              <button id="enviar_form" type="submit" class="btn btn-primary">Envoyer</button> 
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
                 <div class="row align-items-top">
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-sm-left">
                    <nav class="nav flex-column">
                      <a class="nav-link active" href="#ventaModal">Conditions générales de vente</a>
                      <a class="nav-link" href="#garantiaModal">Garantie</a>
                      <a class="nav-link" href="#privacidadModal">Informations clients et données personnelles</a>
                      <a class="nav-link" href="#cookiesModal">Informations sur les cookies et protection de la vie privée</a>
                      <a class="nav-link" href="#legalModal">Mentions légales du site</a>
                    </nav>
                  </div>

                  <div class="col-12 col-md-4 col-lg-4 ml-auto text-lg-left mt-4 mt-lg-0">
                    <img src="img/no-logo.jpg" class="img-responsive mb-3">
                    <p class="my-auto">© 2021. All Rights Reserved</p>
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
              <h2 class="modal-title text-center pb-2" id="legalModal">Mentions légales du site</h2>
                <p><strong>1. Informations légales</strong>&nbsp;</p>
                <p>Nom du site&nbsp;:&nbsp;http://vibroflex.fr/</p>
                <p>Nom de l’éditeur du site&nbsp;: ELITE TRADE AG</p>
                <p>Siège social&nbsp;: 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
                <p>Nom du responsable de la publication&nbsp;: ELITE TRADE AG</p>
                <p>Adresse postale de contact&nbsp;: ELITE TRADE AG</p>
                <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
                <p>Adresse courriel&nbsp;:<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p>Hébergeur du site&nbsp;:</p>
                <p><strong>2. Accès au site</strong></p>
                <p>L'accès au site est réservé aux personnes majeures. L'éditeur se réserve le droit de demander toute justification de votre âge notamment si vous utilisez des services de commande en ligne.&nbsp;</p>
                <p><strong>3. Contenu du site</strong></p>
                <p>Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.</p>
                <p>Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.&nbsp;</p>
                <p>En ce qui concerne les services de commande en ligne, l'ensemble des informations présentes sur ce site sont valables pour la France métropolitaine (Corse incluse) exclusivement. Pour toute commande destinée à d'autres destinations, vous devez demander<span>&nbsp;</span><em>via</em><span>&nbsp;</span>l'adresse e-mail de l'éditeur ci-dessous, les informations nécessaires.&nbsp;</p>
                <p><strong>4. Gestion du site</strong></p>
                <p>Pour la bonne gestion du site, l'éditeur pourra à tout moment&nbsp;:</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspendre, interrompre ou de limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internaute&nbsp;;</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales, ou avec les règles de la Nétiquette&nbsp;;</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspendre le site afin de procéder à des mises à jour&nbsp;</p>
                <p><strong>5. Responsabilité</strong></p>
                <p>La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.</p>
                <p>Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par ailleurs le seul responsable des sites et données que vous consultez.</p>
                <p>L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; du fait de l'usage du site ou de tout service accessible<span>&nbsp;</span><em>via</em><span>&nbsp;</span>Internet&nbsp;;</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; du fait du non-respect par vous des présentes conditions générales.</p>
                <p>L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.</p>
                <p>Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire à raison de votre utilisation du site, il pourra retourner contre vous pour obtenir indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>
                <p>&nbsp;</p>
                <p><strong>6. Liens hypertextes</strong></p>
                <p>La mise en place par vous de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l'éditeur, sollicitée par courriel à l'adresse suivante :&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p>L'éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l'éditeur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l'éditeur.</p>
                <p>Dans tous les cas, tout lien devra être retiré sur simple demande de l'éditeur.</p>
                <p>Toute information accessible<span>&nbsp;</span><em>via</em><span>&nbsp;</span>un lien vers d'autres sites n'est pas sous le contrôle de l'éditeur qui décline toute responsabilité quant à leur contenu.</p>
                <p>&nbsp;</p>
                <p><strong>7. Collecte des données personnelles</strong></p>
                <p>Voir page spécifique&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
                <p><strong>8. Cookies</strong></p>
                <p>Voir page spécifique&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
                <p><strong>9. Photographies et représentation des produits</strong></p>
                <p>Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.</p>
                <p>&nbsp;</p>
                <p><strong>10. loi applicable</strong></p>
                <p>Les présentes conditions d'utilisation du site sont régies par la loi française et le droit applicable est le droit français. La langue utilisée durant les relations précontractuelles et contractuelles est le français.</p>
                <p>&nbsp;</p>
                <p><strong>11. Réclamations et règlement amiable des litiges</strong></p>
                <p>En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement à un médiateur de la consommation en vue de la résolution amiable du litige qui l'oppose à un professionnel. "&nbsp;</p>
                <p>Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges définis à l'article L. 151-1 du Code de la consommation à savoir les litiges de nature contractuelle, portant sur l'exécution d'un contrat de vente ou de fournitures de services, opposant un consommateur à un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers.</p>
                <p>Pour toute difficulté, nous vous invitons à nous contacter préalablement ou à contacter notre service après-vente :&nbsp;</p>
                <p>ELITE TRADE AG</p>
                <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
                <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p>Service après-vente :</p>
                <p>ELITE TRADE AG</p>
                <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p>Une plateforme de règlement des litiges en ligne est à votre disposition : &nbsp;</p>
                <p>Centre européen des consommateurs France :&nbsp;</p>
                <p><a href="http://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">http://ec.europa.eu/consumers/odr/</a><span>.</span><span>&nbsp;</span></p>
                <p>Seules les réclamations relatives à la Vente en Ligne des Articles seront prises en compte.&nbsp;</p>
                <p>Dans l'année qui suivra votre demande auprès de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un médiateur dont trouverez ci-dessous les coordonnées, sachant qu'un litige ne pourra être examiné, sauf exception, que par un seul médiateur :&nbsp;</p>
                <p><em>Médiateur du commercer coopératif et associé</em></p>
                <p><em>http://www.mcca-mediation.fr</em>&nbsp;</p>
                <p>Litiges transfrontaliers :&nbsp;</p>
                <p>Centre européen des consommateurs France :&nbsp;</p>
                <p>europe-consommateurs.eu</p>
                <p>&nbsp;Vous pouvez, à vos frais, vous faire assister par un conseil.&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>12. Contactez-nous</strong></p>
                <p>Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un message à l'adresse suivante&nbsp;:&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
            <div class="card_group row">
              
            </div>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
         </div>

      <div class="modal" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="cookiesModal">Informations sur les cookies et protection de la vie privée</h2>
              <p>
                <p>La présente page est dédiée à la politique de protection de vie privée mise en œuvre par&nbsp;ELITE TRADE AG</p>
                <p>La présente information complète celles relative aux données personnelles, établie conformément à la la loi n°78-17 du 16 janvier 1978 dite «&nbsp;Informatique et Libertés&nbsp;», disponible sous lien&nbsp;:</p>
                <p>https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
                <p>COLLECTE DE DONNEES PAR&nbsp;http://vibroflex.fr/</p>
                <p><strong>A quoi servent vos données&nbsp;?</strong></p>
                <p>Comme indiqué sur la page&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles, les données collectées en vue de traitement informatique sont utilisées afin de permettre la gestion du compte utilisateur</p>
                <p>&nbsp;</p>
                <p><strong>A qui sont destinées vos données&nbsp;?</strong></p>
                <p>Les données collectées sur ce site sont à destination de la société ELITE TRADE AG , en sa qualité de responsable de traitement.<strong>&nbsp;</strong></p>
                <p><strong>Comment sont protégées vos données&nbsp;?</strong></p>
                <p>http://vibroflex.fr&nbsp;prend toutes les précautions pour préserver la sécurité de vos données afin, notamment, d’empêcher leur divulgation à des tiers non-autorisés. A ce titre&nbsp;http://vibroflex.fr met en place toutes les mesures nécessaires pour la sécurisation de ses dispositifs informatiques. Dans l’hypothèse où vos données font l’objet du transfert auprès de sous-traitants (notamment pour leur hébergement), http://vibroflex.fr/&nbsp;veille à ce que ces derniers présentent un niveau de sécurité conforme aux standards requis.&nbsp;</p>
                <p><strong>Quels sont vos droits&nbsp;?</strong></p>
                <p><strong></strong>Conformément aux dispositions des articles 38 et suivants de la loi du 6 Janvier 1978 dite «&nbsp;Informatique et Libertés&nbsp;», vous disposez d’un droit d’accès, de rectification et d’opposition aux traitement de données.</p>
                <p>Pour en connaitre les modalités, rendez-vous sur la page INFORMATIONS CLIENT ET DONNEES PERSONNELLE&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
                <p>&nbsp;</p>
                <p>ENREGISTREMENT DE DONNEES AU MOYEN DE COOKIES</p>
                <p>&nbsp;<strong>Qu’est-ce qu’un cookie&nbsp;?</strong></p>
                <p>Lorsque vous consultez un site Internet, l’éditeur du site peut être amené à déposer un fichier texte sur votre ordinateur. Ce fichier est déposé par l’utilisation de votre logiciel de navigation&nbsp;: c’est ce fichier qui est appelé «&nbsp;cookie&nbsp;». Les informations stockées relatives à votre navigation sur notre site internet (http://vibroflex.fr/) concernent notamment les paramètres de langue, le temps de connexion, pages visitées,</p>
                <p>Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant le site<span>&nbsp;http://vibroflex.fr/</span>, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.</p>
                <p>Nous attirons votre attention sur le fait que le partage de l’utilisation de votre terminal avec d’autres personnes est susceptible de modifier le caractère personnalisé de l’action des cookies.&nbsp;</p>
                <p><strong>Quels sont les types de cookies utilisés par http://vibroflex.fr/&nbsp;?</strong></p>
                <p>http://vibroflex.fr utilise des&nbsp;«&nbsp;cookies&nbsp;» visant à faciliter votre navigation. Il s’agit notamment des cookies suivants&nbsp;:</p>
                <ul>
                <li>les cookies utilisés comme «&nbsp;panier d’achat&nbsp;»</li>
                <li>les cookies de «&nbsp;session utilisateur&nbsp;» (SessionID)</li>
                <li>les cookies ayant pour finalité d’enregistrer la langue de l’utilisateur pour faciliter sa navigation</li>
                <li>les cookies flash contenant des éléments strictement nécessaires pour faire fonctionner un lecteur de média (audio ou vidéo) correspondant à un contenu demandé par l’utilisateur.</li>
                </ul>
                <p>&nbsp;</p>
                <p>http://vibroflex.fr peut également être amené à utiliser les cookies ayant pour finalité de nous renseigner sur les produits, services et pages que vous consultez. Ces cookies nous permettent de vous proposer un contenu personnalisé et notamment d’afficher lors de votre connexion sur notre site des publicités ciblées en rapport avec vos attentes.</p>
                <p>Ces cookies peuvent être paramétrés selon vos choix, tels que décrits dans la section ci-dessous. En cas de refus des cookies nous permettant d’identifier les produits, services et pages que vous consultez, le contenu de votre navigation ne sera pas personnalisé et les publicités affichées pourront être sans intérêt pour vous.</p>
                <p>&nbsp;</p>
                <p><strong>http://vibroflex.fr permet-il à des tiers d’utiliser des Cookies lors de ma navigation&nbsp;?</strong></p>
                <p>Le site<span>&nbsp;http://vibroflex.fr/</span><span>&nbsp;</span>utilise Google Analytics™, un service d’analyse de site internet fourni par Google Inc. Google Analytics utilise des cookies, qui sont des fichiers texte placés sur votre terminal, pour aider le site internet à analyser l’utilisation du site par ses utilisateurs et à réaliser des statistiques. Les données générées par les cookies concernant votre utilisation du site (y compris votre adresse IP à sont transmises et stockées par Google sur des serveurs situés aux Etats-Unis. Google utilisera cette information dans le but d’évaluer votre utilisation du site, de compiler des rapports sur l’activité du site à destination de son éditeur et de fournir d’autres services relatifs à l’activité du site et à l’utilisation d’internet. Google est susceptible de communiquer ces données à des tiers en cas d’obligation légale ou lorsque ces tiers traitent ces données pour le compte de Google, notamment l’éditeur de ce site. Google ne recoupera pas votre adresse IP avec toute autre donnée détenue par Google. Vous pouvez désactiver l’utilisation de cookies en sélectionnant les paramètres appropriés de votre navigateur (cf.ci-dessous). Cependant, une telle désactivation pourrait empêcher l’utilisation de certaines fonctionnalités de ce site. En utilisant ce site internet, vous consentez expressément au traitement de vos données nominatives par Google dans les conditions et pour les finalités décrites ci-dessus. Pour consulter les Règles de confidentialité Google&nbsp;<a href="http://www.google.com/intl/fr/policies/privacy/" aria-describedby="a11y-external-message">cliquez ici</a>.</p>
                <p>Google a adhéré aux principes relatifs à la protection des données «&nbsp;Safe Harbor Privacy&nbsp;Principles&nbsp;» établies par le département du Commerce américain. Ces principes, négociés entre les autorités américaines et la Commission européenne en 2001, sont essentiellement basés sur ceux de la Directive 95/46 du 24 octobre 1995 et assurent une protection adéquate pour les transferts de données en provenance de l’Union européenne vers des entreprises établies aux Etats-Unis.</p>
                <p>&nbsp;</p>
                <p><strong>Comment exercer votre choix concernant les cookies&nbsp;?</strong></p>
                <p>Paramètres du navigateur et conséquences de vos choix&nbsp;:</p>
                <p>Plusieurs possibilités vous sont offertes pour gérer les cookies. A tout moment, vous pouvez exprimer et modifier vos souhaits en matière de cookies, via la section&nbsp;<strong>Aide&nbsp;</strong>de la barre d’outils de votre navigateur, Celle-ci vous indique comment refuser les nouveaux «&nbsp;cookies&nbsp;» ou obtenir un message qui vous signale leur réception ou encore comment désactiver les «&nbsp;cookies&nbsp;» soit systématiquement, soit selon leur émetteur. Vous pouvez également effacer les cookies manuellement.</p>
                <p>Vous pouvez aussi choisir de désactiver ou de supprimer des données similaires utilisées par des logiciels accessoires à votre navigateur, tels que les Flash cookies, en modifiant les paramètres de ces logiciels ou en visitant le site Internet de l’éditeur de ces logiciels.&nbsp;</p>
                <p>Attention, il est possible que cette configuration de votre navigateur vous empêche l’accès à certains contenus ou perturbe significativement votre navigation et les services que vous attendez de la part de notre site.</p>
                <p>Dans pareille hypothèse, ELITE TRADE AG&nbsp;décline toute responsabilité concernant les conséquences liées au comportement dégradé du site<span>&nbsp;http://vibroflex.fr/</span><span>&nbsp;</span>résultant de l’impossibilité d’utiliser les cookies nécessaires à son fonctionnement.</p>
                <p>&nbsp;</p>
                <p><strong>Choix selon navigateur internet&nbsp;:</strong></p>
                <p>Pour la gestion des cookies, chaque navigateur propose un process différent de configuration. Il est décrit dans le menu d’ «&nbsp;aide&nbsp;» de votre navigateur, qui vous permettra de savoir comment exprimer vos choix concernant les cookies&nbsp;:</p>
                <ul>
                <li>
                <strong>Pour Internet Explorer™</strong>&nbsp;: ouvrez le menu «&nbsp;Outils&nbsp;», puis sélectionnez «&nbsp;Options Internet&nbsp;»&nbsp;; cliquez sur l’onglet «&nbsp;Confidentialité&nbsp;» puis l’onglet «&nbsp;Avancé&nbsp;» choisissez le niveau souhaité ou suivez&nbsp;<a href="http://windows.microsoft.com/fr-fr/windows-vista/block-or-allow-cookies" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                <strong>Pour Firefox™&nbsp;</strong>: ouvrez le menu «&nbsp;Outils&nbsp;», puis sélectionnez «&nbsp;Options&nbsp;»&nbsp;; cliquiez sur l’onglet «&nbsp;Vie privée&nbsp;» puis choisissez les options souhaitées ou suivez&nbsp;<a href="https://support.mozilla.org/fr/kb/activer-desactiver-cookies" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                <strong>Pour Chrome™&nbsp;:&nbsp;</strong>ouvrez le menu de configuration (logo clé à molette), puis sélectionnez «&nbsp;Options&nbsp;»&nbsp;; cliquez sur «&nbsp;Options avancées&nbsp;» puis dans la section «&nbsp;Confidentialité&nbsp;» cliquez sur «&nbsp;Paramètres de contenu&nbsp;» et choisissez les options souhaitées ou suivez&nbsp;<a href="https://support.google.com/accounts/answer/61416?hl=fr" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                <strong>Pour Safari™&nbsp;</strong>: choisissez «&nbsp;Safari&nbsp;», «&nbsp;Préférences&nbsp;» puis cliquez sur Sécurité&nbsp;»&nbsp;: Dans la section «&nbsp;Accepter les cookies&nbsp;» choisissez les options souhaitées ou suivez&nbsp;<a href="https://support.apple.com/fr-fr/HT1677" aria-describedby="a11y-external-message">ce lien</a>&nbsp;:</li>
                <li>
                <strong>Pour Opéra™&nbsp;</strong>: ouvrez le menu «&nbsp;Outils&nbsp;» ou «&nbsp;Réglages&nbsp;», puis sélectionnez «&nbsp;Supprimer les données privées&nbsp;»&nbsp;; cliquez sur l’onglet «&nbsp;Options détaillées&nbsp;», puis choisissez les options souhaitées ou suivez&nbsp;<a href="http://help.opera.com/Windows/10.20/fr/cookies.html" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                </ul>
                <p>&nbsp;</p>
                <p><strong>Votre choix sur mobile</strong></p>
                <ul>
                <li>Pour spécifier si Safari accepte ou non des cookies&nbsp;:</li>
                </ul>
                <ol>
                <li>Dans l’écran principal, choisissez Réglages &gt; Safari</li>
                <li>Touchez «&nbsp;Acceptez les cookies&nbsp;» et choisissez «&nbsp;Jamais&nbsp;», «&nbsp;Des sites visités&nbsp;» ou «&nbsp;Toujours&nbsp;».</li>
                </ol>
                <ul>
                <li>Pour effacer tous les cookies dans Safari&nbsp;:
                <ol>
                <li>Dans l’écran principal, choisissez Réglages &gt; Safari</li>
                <li>Touchez &nbsp;effacer les cookies.</li>
                </ol>
                </li>
                <li>Pour supprimer les cookies sur Android&nbsp;:</li>
                <li>Menu &gt; Paramètres &gt; Effacer tous les&nbsp;cookies</li>
                </ul>
              </p>
            <div class="card_group row">
              
            </div>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
         </div>
      <div class="modal" id="privacidadModal" tabindex="-1" aria-labelledby="privacidadModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="privacidadModal">Informations clients et données personnelles</h2>
              <p>
                <p>Identité : ELITE TRADE AG</p>
                <p>Nº Registre : 81539277400015</p>
                <p>Adresse Postale : 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
                <p>Courrier Électronique : <a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p><strong>&nbsp;OBJECTIFS</strong></p>
                <p><strong>ENVOI DES COMMANDES</strong></p>
                <p>1.- Gérer vos demandes d'information et vos commandes</p>
                <p>Nous utiliserons vos données pour gérer toute demande d'information que vous nous ferez et pour vous remettre les commandes que vous nous ferez.</p>
                <p><span>2. - Envoi d'information commerciale et de publicité de nos produits</span></p>
                <p>Nous utiliserons vos données pour vous envoyer des communications commerciales sur nos produits dont nous pensons qu'ils peuvent vous intéresser par tout moyen, automatisé ou non (courrier, SMS, MMS, fax, Internet, téléphone…), en utilisant l'information dont nous disposons sur vos transactions et vos préférences. Vous pouvez vous opposer à tout moment au traitement de vos données à cet effet, selon ce qui est spécifié au paragraphe&nbsp;</p>
                <p><span>4. - Envoi d'information commerciale d'entreprises tierces.</span></p>
                <p>Nous demandons votre consentement pour l'utilisation de vos données afin de vous envoyer des communications commerciales d'entreprises tierces dont nous pensons qu'elles peuvent vous intéresser par tout moyen, automatisé ou non (courrier, SMS, MMS, fax, Internet, téléphone…).</p>
                <p>Vous pouvez vous opposer à tout moment au traitement de vos données dans ce but, selon ce qui est spécifié au paragraphe.</p>
                <p>Les données fournies seront conservées pendant la relation commerciale avec notre entreprise, tant que leur suppression ne sera pas demandée par l'intéressé.</p>
                <p>&nbsp;</p>
                <h4><strong>LÉGITIMATION</strong></h4>
                <p>Le traitement de vos données pour l'envoi de vos commandes se base sur l'exécution du contrat. L'offre prospective de nos produits se base sur l'intérêt légitime et les entreprises tierces se base sur le consentement de l'intéressé.</p>
                <p>&nbsp;</p>
                <h4><strong><a id="droits" name="droits"></a>DROITS</strong></h4>
                <p>Toute personne a le droit d'obtenir une confirmation pour savoir si ELITE TRADE AG traite ou non des données personnelles qui la concernent.</p>
                <p>Les personnes intéressées ont le droit d’accéder à leurs données personnelles, et à demander la rectification des données inexactes ou, le cas échéant, demander la suppression si, entre autres raisons, les données ne sont plus nécessaires pour les objectifs pour lesquels elles ont été recueillies.</p>
                <p>Dans certains cas, les intéressés pourront demander la limitation du traitement de leurs données, cas dans lequel nous les conserverons uniquement pour l'exercice ou la défense de réclamations. Dans certaines circonstances et pour des raisons concernant leur situation particulière, les intéressés pourront s'opposer au traitement de leurs données.</p>
                <p>ELITE TRADE AG cessera de traiter les données, sauf pour des motifs légitimes impérieux, ou pour exercer la défense de réclamations éventuelles. Si vous exercez le droit d'opposition à l'envoi de publicité, vos données seront incluses dans un listing d'exclusion publicitaire qui est destiné à diminuer la publicité que vous recevez.</p>
                <p>Les personnes intéressées ont le droit à la portabilité de leurs données.</p>
                <p>L'intéressé a également le droit de retirer à tout moment le consentement donné.</p>
                <p>Pour exercer vos droits, nous vous demandons de nous communiquer la demande par écrit à&nbsp;Vibroflex&nbsp;en indiquant votre prénom, vos noms de famille, votre adresse, accompagné d'une copie de votre document officiel d'identification, par téléphone au nº 02&nbsp;78 88&nbsp;00&nbsp;81 ou de nous envoyer un e-mail à :&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
                <p>&nbsp;Mineurs.</p>
                <p>Les moins de 14 ans doivent s'abstenir de nous indiquer leurs données personnelles Vous pouvez consulter la politique de confidentialité sur</p>
              </p>
            <div class="card_group row">
              
            </div>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
         </div>
      <div class="modal" id="garantiaModal" tabindex="-1" aria-labelledby="garantiaModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="garantiaModal">Garantie</h2>
              <p>
                  Les articles vendus sur Vibroflex sont reconnus par les plus grandes entreprises du secteur. Nous garantissons des produits de haute qualité et restons à l'écoute de nos clients. Nous sommes convaincus que le VibroFlex fonctionnera pour vous, cependant, si vous n'êtes pas 100% satisfaits des résultats que vous obtenez, vous n'avez qu'à le retourner dans les 90 jours et demander un remboursement.
              </p>
            <div class="card_group row">
              
            </div>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
         </div>
      <div class="modal" id="ventaModal" tabindex="-1" aria-labelledby="ventaModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="ventaModal">Conditions générales de vente</h2>
             <p>Le présent site Internet vibroflex.fr (le " Site Internet") est édité par la société ELITE TRADE AG. 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>Email : <a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a>, numéro de téléphone:01 86 65 00 05 (offre valable uniquement sur la France métropolitaine)&nbsp;</p>
              <p><strong>Préambule</strong>&nbsp;</p>
              <p>Le Vendeur a pour activité la vente de biens à distance de produits de bien-être et de grande consommation.&nbsp;</p>
              <p>Le Vendeur assure notamment la commercialisation des biens et/ou services susmentionnés par l'intermédiaire du site <span>vibroflex.fr</span>. La liste des biens et services proposés à la vente en ligne par le Vendeur peut être consultée sur le site disponible à l'adresse <span>vibroflex.fr</span></p>
              <p>Les Parties conviennent que leurs relations seront régies exclusivement par le présent contrat, à l'exclusion de toute condition préalablement disponible sur le site web du Vendeur.&nbsp;</p>
              <p>Le Vendeur se réserve le droit de modifier à tout moment les présentes conditions générales de vente en publiant une nouvelle version sur le Site. Les conditions générales de vente sont celles en vigueur à la date de validation de la commande. Les Parties conviennent que les photos des Biens en vente sur le site <span>vibroflex.fr</span><em><span>&nbsp;</span></em>n'ont aucune valeur contractuelle.&nbsp;</p>
              <p><strong>1. Définitions</strong></p>
              <p>Les termes et expressions visés ci-après signifient, lorsqu'ils sont précédés d'une lettre majuscule, pour les besoins de l'interprétation et de l'exécution des présentes :&nbsp;</p>
              <p>" Article " : le ou les Biens ayant fait l'objet de la Commande ;&nbsp;</p>
              <p>" Bien " : tout produit proposé à la vente sur le Site ;&nbsp;</p>
              <p>" Commande " : demande de Biens ou Services réalisée par le Client auprès du Vendeur ;&nbsp;</p>
              <p>" Conditions Générales de Vente " : les conditions générales de vente qui font l'objet des présentes ;&nbsp;</p>
              <p>" Contrat " : le présent acte, y compris son préambule et ses annexes ainsi que tout amendement, substitution, extension ou renouvellement intervenu aux présentes en vertu de la convention des Parties&nbsp;;&nbsp;</p>
              <p>" Délai de Livraison " : période entre la date de Validation de la Commande et la date de la Livraison de la Commande au Client ;</p>
              <p>&nbsp;" Frais de Livraison " : coût des frais engagés par le Vendeur pour acheminer la Commande à l'adresse de Livraison indiquée par le Client ;&nbsp;</p>
              <p>" Livraison " : expédition de l'Article au Client ;&nbsp;</p>
              <p>" Mode de Livraison " : désigne tout mode de livraison standard ou express disponible sur le Site au moment de la Commande ;&nbsp;</p>
              <p>" Prix " : la valeur unitaire d'un Bien ou d'un Service ; cette valeur s'entend toutes taxes comprises et hors Frais de Livraison ;&nbsp;</p>
              <p>" Prix Total " : le montant total des Prix cumulés des Biens et Services qui font l'objet de la Commande ; ce montant s'entend toutes taxes comprises ;&nbsp;</p>
              <p>" Prix Tout Compris " : le Prix Total auquel est ajouté le prix des Frais de Livraison ; ce montant s'entend toutes taxes comprises ;&nbsp;</p>
              <p>" Service " : tout service proposé à la vente sur le Site ;&nbsp;</p>
              <p>&nbsp;" Site " : site de Vente en Ligne "<span>vibroflex.fr</span> " utilisé par le Vendeur pour la commercialisation de ses Biens / Services ;&nbsp;</p>
              <p>" Territoire " : a le sens donné à ce terme à l'Article 3 ;&nbsp;</p>
              <p>" Validation de la Commande " : a le sens donné à l'Article 5 ;&nbsp;</p>
              <p>" Vente en Ligne " : commercialisation des Biens et Services du Vendeur via le Site ;&nbsp;</p>
              <p>Les références aux Articles sont des références aux articles du présent Contrat, à moins qu'il n'en soit disposé autrement.</p>
              <p>Toute référence au singulier inclut le pluriel et inversement.</p>
              <p>Toute référence à un genre inclut l'autre genre.&nbsp;</p>
              <p><strong>2. Objet</strong></p>
              <p>Le présent Contrat a pour objet de définir les droits et obligations des Parties dans le cadre de la Vente en Ligne des Biens et Services proposés à la vente par le Vendeur au Client.&nbsp;</p>
              <p><strong>3. Champ d’application</strong></p>
              <p>Les présentes Conditions Générales de Vente sont réservées aux seuls consommateurs, au sens qu'en donnent la loi et la jurisprudence, agissant exclusivement pour leur propre compte et domiciliés en France Métropolitaine&nbsp;</p>
              <p>Conformément aux articles L. 111-1 et L. 111-3 du Code de la consommation, les caractéristiques essentielles et les prix des Biens et Services vendus par voie électronique sont disponibles sur le Site du vendeur.&nbsp;</p>
              <p>Le professionnel communique également au consommateur les informations relatives à son identité, à ses coordonnées postales, téléphoniques et électroniques et à ses activités, ainsi que, s'il y a lieu, celles relatives aux garanties légales, aux fonctionnalités du contenu numérique et, le cas échéant, à son interopérabilité, à l'existence et aux modalités de mise en œuvre des garanties et aux autres conditions contractuelles, conformément aux articles R. 111-1 et R. 111-2 du Code de la consommation.&nbsp;</p>
              <p>Par ailleurs, le Client reçoit les informations prévues aux&nbsp; articles L. 121-8 et L. 121-19 du Code de la consommation, préalablement et postérieurement à la conclusion de la vente et notamment au moyen des présentes Conditions Générales de Vente.&nbsp;</p>
              <p>Les présentes Conditions Générales de Vente sont applicables à toutes les ventes de Biens et Services par le Vendeur intervenues par le biais du Site.&nbsp;</p>
              <p>Le Client déclare avoir pris connaissance des présentes Conditions Générales de Vente avant la Validation de la Commande au sens de l'Article 5. La Validation de la Commande vaut donc acceptation sans restriction ni réserve des présentes Conditions Générales de Vente. Les présentes Conditions Générales de Vente sont applicables pour les Commandes réalisées en vue d'une Livraison en France métropolitaine, y compris la Corse] (le " Territoire ").</p>
              <p>Les présentes Conditions Générales de Vente sont applicables y compris en ce qui concerne le moyen de paiement des commandes.&nbsp;</p>
              <p><strong>4. Entrée en vigueur et Durée</strong></p>
              <p>Le présent Contrat entre en vigueur à la date de Validation de la Commande telle que définie à l'Article 5.</p>
              <p>Le Contrat est conclu pour la durée nécessaire à la fourniture des Biens et Services, jusqu'à l'extinction des garanties et obligations dues par le Vendeur.&nbsp;</p>
              <p><strong>5. Commande des Biens et Services et Étapes de Conclusion de la Vente en Ligne&nbsp;</strong></p>
              <p>Afin de réaliser la Commande, le Client devra obligatoirement suivre les étapes suivantes :&nbsp;</p>
              <p>1. Se rendre sur l'adresse du Site ;&nbsp;</p>
              <p>2. Suivre les instructions du Site et en particulier, les instructions nécessaires à l'ouverture d'un compte client ;&nbsp;</p>
              <p>3. Remplir le formulaire de commande. En cas d'inactivité prolongée lors de la connexion, il est possible que la sélection des Biens et Services choisis par le Client avant cette inactivité ne soit plus garantie. Le Client est alors invité à reprendre sa sélection de Biens et Services depuis le début ;&nbsp;</p>
              <p>4. Vérifier les éléments de la Commande et le cas échéant, identifier et corriger les erreurs ;&nbsp;</p>
              <p>5. Valider la Commande, le Prix Total ainsi que le Prix Tout Compris (la " Validation de la Commande ") ;&nbsp;</p>
              <p>6. Suivre les instructions du serveur de paiement en ligne pour payer le Prix Tout Compris.&nbsp;</p>
              <p>Le Client reçoit ensuite par voie électronique et sans délai une confirmation d'acceptation de paiement de la Commande.&nbsp;</p>
              <p>Le Client reçoit également par voie électronique et sans délai un accusé réception valant confirmation de la Commande (la " Confirmation de la Commande ").&nbsp;</p>
              <p>La Livraison aura lieu à l'adresse de livraison indiquée par le Client lors de la Commande. Lors de la réalisation des différentes étapes de la Commande susmentionnées, le Client s'engage à respecter les présentes conditions contractuelles par application de l'article 1316-1 du Code civil.&nbsp;</p>
              <p>Le Vendeur s'engage à honorer la Commande uniquement dans la limite des stocks disponibles des Biens. À défaut de disponibilité des Biens, le Vendeur s'engage à en informer le Client.&nbsp;</p>
              <p>Conformément à l'article L. 122-1 du Code de la consommation, le Vendeur se réserve le droit de refuser la Commande si elle est anormale, passée de mauvaise foi ou pour tout autre motif légitime, et notamment, lorsqu'il existe un litige avec le Client concernant le paiement d'une commande antérieure.&nbsp;</p>
              <p><strong>6. Prix des Biens et Services et Conditions de Validité</strong>&nbsp;</p>
              <p>Le Prix des Biens et Services vendus sur le Site est indiqué respectivement par article et référence ou par prestation et par référence.</p>
              <p>Au moment de la Validation de la Commande, le prix à payer s'entend du Prix Tout Compris.</p>
              <p>Les frais de télécommunication inhérents à l'accès au Site restent à la charge exclusive du Client.</p>
              <p>La durée de validité des offres et Prix est déterminée par l'actualisation du Site, et sous réserve des stocks disponibles.</p>
              <p>&nbsp;</p>
              <p><strong>7. Conditions et moyens de paiement</strong></p>
              <p>Le paiement du Prix Tout Compris par le Client s'effectue par l'intermédiaire de l'un des moyens de paiement suivants :</p>
              <p>- Soit par carte bancaire (Visa, Mastercard, …)</p>
              <p>- Soit par compte PAYPAL&nbsp;: PayPal est un service de paiement électronique dématérialisé qui permet de payer en ligne, d'envoyer et de recevoir de l'argent sans partager les informations bancaires.&nbsp;<a href="https://www.paypal.com/fr/webapps/mpp/paypal-popup" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">Qu’est-ce que PayPal</a>?&nbsp;</p>
              <p>La transaction est immédiatement débitée sur la carte bancaire du Client après vérification des données de celle-ci, à réception de l'autorisation de débit de la part de la société émettrice de la carte bancaire utilisée par le Client.&nbsp;</p>
              <p>Conformément à l'article L. 132-2 du Code monétaire et financier, l'engagement de payer donné au moyen d'une carte de paiement est irrévocable. En communiquant les informations relatives à sa carte bancaire, le Client autorise le Vendeur à débiter sa carte bancaire du montant correspondant au Prix Tout Compris. Ce prix prendra en compte la Taxe sur la Valeur Ajoutée (et/ou de toute autre taxe notamment environnementale pouvant être créée par la réglementation) ainsi que, le cas échéant, les éventuelles réductions consenties au travers d’opérations promotionnelles.</p>
              <p>À cette fin, le Client confirme qu'il est le titulaire de la carte bancaire à débiter et que le nom figurant sur la carte bancaire est effectivement le sien. Le Client communique les seize chiffres et la date d'expiration de sa carte bleue ainsi que le cas échéant, les numéros du cryptogramme visuel.</p>
              <p>Dans le cas où le débit du Prix Tout Compris serait impossible, la Vente en Ligne serait immédiatement résolue de plein droit et la Commande serait annulée.</p>
              <p>Le Vendeur met en œuvre tous les moyens disponibles en sa possession pour assurer la confidentialité et la sécurité des données transmises sur le Site<span> vibroflex.fr</span></p>
              <p><strong>7. Livraison de la commande</strong></p>
              <p><em>7.1 Mode de Livraison</em></p>
              <p>Le Client choisit l'un des Modes de Livraison proposés sur le Site à l'occasion de la réalisation de la Commande.&nbsp;</p>
              <p><em>7.2 Adresse de Livraison</em></p>
              <p>Le Client choisit une adresse de Livraison nécessairement située sur le Territoire, sous peine de refus de la Commande. Le Client est seul responsable d'un défaut de Livraison dû à un manque d'indication lors de la Commande.&nbsp;</p>
              <p><em>7.3 Montant des Frais de Livraison</em></p>
              <p>Le montant des Frais de Livraison dépend du montant de la Commande et du mode de livraison choisi par le Client. Les Prix s’entendent hors frais de livraison (port, emballage et confection du colis selon montants en vigueur et communiqués au client). En tout état de cause, le montant des Frais de Livraison est indiqué au Client avant la Validation de la Commande.&nbsp;</p>
              <p><em>7.4 Délais de Livraison</em></p>
              <p>Les Délais de Livraison sont disponibles sur le Site et peuvent varier en fonction de la disponibilité des Biens ayant fait l'objet de la Commande.</p>
              <p>Les Délais de Livraison s'entendent en jours ouvrés et correspondent aux délais moyens de préparation et d'acheminement de la Commande sur le Territoire.</p>
              <p>Les Délais de Livraison courent à compter de la date de Confirmation de la Commande par le Vendeur.&nbsp;</p>
              <p><em>7.5. Retard de Livraison [à valider par ELITE TRADE AG]</em></p>
              <p>En cas de retard de Livraison, la Commande n'est pas annulée.</p>
              <p>Le Vendeur informe le Client par courrier que la Livraison interviendra avec du retard. Le Client pourra alors décider d'annuler la Commande et enverra par tout moyen (mail, courrier) au Vendeur un avis d'annulation de la Commande.</p>
              <p>Dans le cas où la Commande n'a pas encore été expédiée lors de la réception par le Vendeur de l'avis d'annulation du Client, la Livraison est bloquée et le Client est remboursé des sommes éventuellement débitées dans un délai de quatorze jours suivant la réception de l'avis d'annulation. Dans le cas où la Commande a déjà été expédiée lors de la réception par le Vendeur de l'avis d'annulation du Client, le Client peut encore annuler la Commande en refusant le colis. Le Vendeur procédera alors au remboursement des sommes débitées et des frais de retour déboursés par le Client dans un délai de quatorze jours suivant la réception du retour du colis refusé complet et dans son état d'origine.&nbsp;</p>
              <p><em>7.6 Vérification de la Commande à son arrivée</em></p>
              <p>Le Client est tenu de vérifier l'état de l'emballage ainsi que les Articles lors de la Livraison.</p>
              <p>Il appartient au Client d'émettre les réserves et les réclamations qu'il estime nécessaires, voire de refuser le colis, lorsque le colis est manifestement endommagé à la Livraison. Lesdites réserves et réclamations doivent être adressées au transporteur par lettre recommandée avec demande d'avis de réception dans les trois jours ouvrables, non compris les jours fériés, qui suivent la date de la Livraison des Biens.&nbsp;</p>
              <p>Le Client doit par ailleurs faire parvenir une copie de cette lettre au Vendeur. Le défaut de réclamation dans le délai susmentionné éteint toute action contre le transporteur conformément à l'article L. 133-3 du Code de commerce. Le Client doit s'assurer que les Biens qui lui ont été livrés correspondent à la Commande. En cas de non-conformité des Biens en nature ou en qualité aux spécifications mentionnées dans le bon de Livraison, le Client doit informer ELITE TRADE AG. par courrier électronique et renvoyer les Biens à l'adresse indiquée.&nbsp;</p>
              <p><strong>8. Délai de rétractation</strong></p>
              <p dir="ltr"><span>Conformément aux articlesL221-18 et suivants du Code de la Consommation, vous disposez d'un délai de rétractation de&nbsp;</span><span>14 jours</span><span>&nbsp;à compter du jour de réception de &nbsp;votre commande, sans avoir à justifier de motifs ni à payer de pénalités, à l’exception des frais de retour</span><span><br class="kix-line-break"><br class="kix-line-break"></span></p>
              <p dir="ltr"><span>Le décompte du délai de 14 jours commence le lendemain de la livraison de votre commande. Si ce délai expire un samedi, un dimanche ou un jour férié, il est prolongé jusqu'au premier jour ouvrable suivant.</span></p>
              <p><br class="kix-line-break">Dans le cas d’une commande livrée en plusieurs fois, le délai cours à compter de la réception du dernier bien faisant partie d’une même commande.<br class="kix-line-break"><br class="kix-line-break">Afin d’exercer votre droit de rétractation, vous pouvez renvoyer par voie postale le formulaire de rétractation disponible<span>&nbsp;</span><a href="https://www.francedirectshop.fr/conditions-vente#formulaire" aria-describedby="a11y-external-message">ici</a>,* ou tout autre écrit exprimant votre volonté de rétractation, à l’adresse suivante :<br class="kix-line-break">ELITE TRADE AG 15, 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p dir="ltr"><span>Vous pouvez aussi exercer votre droit de rétractation&nbsp;</span><span>par téléphone :02&nbsp;78&nbsp;88 00 81</span><span>&nbsp;ou par e-mail:&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></span><a href="mailto:info@francedirectshop.fr" aria-describedby="a11y-external-message"><span><br class="kix-line-break"><br class="kix-line-break"></span></a></p>
              <p dir="ltr"><span>Vous devrez alors retourner le(s) produit(s) à ELITE TRADE AG au plus tard dans les 14 jours suivantl’envoi de votre rétractation</span><span>.</span></p>
              <p dir="ltr"><span>Le Client doit renvoyer le(s) article(s) neufs emballés, accompagné(s) de tous les accessoires éventuels, cadeaux, notices d'emploi et documentations à l'adresse suivante:« ELITE TRADE AG c/o -</span></p>
              <p dir="ltr"><span>ELITE TRADE AG vous rembourse la totalité de votre commande (produits + frais de livraison initiaux), à l’exception des coûts directs de renvoi.</span></p>
              <p dir="ltr"><span>Les éventuels frais supplémentaires découlant du choix d’un mode de livraison plus coûteux que le mode de livraison initial ne pourront vous être remboursés.</span><span><br class="kix-line-break"></span><span><br class="kix-line-break"></span><span>Sauf accord contraire, le remboursement est toujours effectué selon le mode de paiement initial utilisé au moment de l’achat.&nbsp; ELITE TRADE AG s’engage à effectuer le remboursement des produits dans les meilleurs délais et, en tout cas, dans les 14 jours à compter de la date à laquelle ELITE TRADE AG aura récéptionné les biens ou de la date à laquelle le consommateur aura fourni une preuve de l´expédition des biens.</span><span><br class="kix-line-break"></span><span><br class="kix-line-break"></span><span>La dépréciation des biens résultant de manipulations autres que celles nécessaires pour établir la nature, les caractéristiques et le bon fonctionnement de ces biens pourrait contraindre ELITE TRADE AG à diminuer le montant du remboursement en conséquence.</span></p>
              <div><span>&nbsp;</span></div>
              <p><em><span><a name="formulaire"></a>FORMULAIRE DE RETRACTATION</span></em></p>
              <p><em>A l'attention de ELITE TRADE AG</em></p>
              <p><em>&nbsp;</em></p>
              <p><em></em><em>Numéro de téléphone de ELITE TRADE AG : <span>02&nbsp;78&nbsp;88 00 81</span></em></p>
              <p><em>Adresse de courrier électronique de ELITE TRADE AG:<span>&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></span></em></p>
              <p><em>Adresse postale de ELITE TRADE AG: 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</em></p>
              <p><em>&nbsp;</em></p>
              <p><em>Je vous notifie par la présente ma rétractation du contrat portant sur la vente du PRODUIT ci-dessous :</em></p>
              <p><em>&nbsp;</em></p>
              <p><em>Référence du PRODUIT : [______________________]</em></p>
              <p><em>N° de la facture : [___________________]</em></p>
              <p><em>N° du bon de commande : [________________]</em></p>
              <p><em>Commandé le [____________] / reçu le [________________]</em></p>
              <p><em>Moyen de paiement utilisé : [____________________]</em></p>
              <p><em>Nom du CLIENT&nbsp;: [____________________]</em></p>
              <p><em>Adresse du CLIENT : [_______________________]</em></p>
              <p><em>Adresse de livraison : [_________________________]</em></p>
              <p><em>Courriel du CLIENT : [_______________________]</em></p>
              <p><em>Signature du CLIENT (sauf cas de transmission par courriel)</em></p>
              <p><em>Date : [___ / ___ / ___ ]</em></p>
              <p><em>&nbsp;</em></p>
              <p><strong>9. Garantie</strong></p>
              <p>Le Vendeur est soumis aux conditions de garanties légales prévues aux&nbsp; articles L. 211-4, L. 211-5 et L. 211-12 du Code de la consommation&nbsp; et aux&nbsp; articles 1641 et 1648 du Code civil, ci-après reproduits&nbsp;:&nbsp;</p>
              <p>Art. L. 211-4 du Code de la consommation : " Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité".&nbsp;</p>
              <p>Art. L. 211-5 du Code de la consommation : "Pour être conforme au contrat, le bien doit :&nbsp;</p>
              <p>1° Etre propre à l'usage habituellement attendu d'un bien semblable et, le cas échéant :- correspondre à la description donnée par le vendeur et posséder les qualités que celui-ci a présentées à l'acheteur sous forme d'échantillon ou de modèle ;- présenter les qualités qu'un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l'étiquetage ;&nbsp;</p>
              <p>2° Ou présenter les caractéristiques définies d'un commun accord par les parties ou être propre à tout usage spécial recherché par l'acheteur, porté à la connaissance du vendeur et que ce dernier a accepté".&nbsp;</p>
              <p>Art. L. 211-12 du Code de la consommation : "L'action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien".&nbsp;</p>
              <p>Art. 1641 du Code civil : " Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre à l'usage auquel on la destine, ou qui diminuent tellement cet usage que l'acheteur ne l'aurait pas acquise, ou n'en aurait donné qu'un moindre prix, s'il les avait connus".&nbsp;</p>
              <p>Art. 1648 du Code civil : " L'action résultant des vices rédhibitoires doit être intentée par l'acquéreur dans un délai de deux ans à compter de la découverte du vice. Dans le cas prévu par l'article 1642-1, l'action doit être introduite, à peine de forclusion, dans l'année qui suit la date à laquelle le vendeur peut être déchargé des vices ou des défauts de conformité apparents".&nbsp;</p>
              <p><strong>10. Droits de propriété intellectuelle</strong>&nbsp;</p>
              <p>&nbsp;Les marques du Vendeur ELITE TRADE AG, ainsi que l'ensemble des marques figuratives ou non et plus généralement toutes les autres marques, illustrations, images et logotypes figurant sur les Biens, leurs accessoires et leurs emballages, qu'ils soient déposés ou non, sont et demeureront la propriété exclusive du Vendeur. Toute reproduction totale ou partielle, modification ou utilisation de ces marques, illustrations, images et logotypes, pour quelque motif et sur quelque support que ce soit, sans accord exprès et préalable du Vendeur, est strictement interdite. Il en est de même de toute combinaison ou conjonction avec toute autre marque, symbole, logotype et plus généralement tout signe distinctif destiné à former un logo composite. Il en est de même pour tout droit d'auteur, dessin, modèle et brevet qui sont la propriété du Vendeur.&nbsp;</p>
              <p><strong>11. Confidentialité des Données</strong>&nbsp;</p>
              <p>&nbsp;Les informations demandées au Client sont nécessaires au traitement de la Commande. Dans l'hypothèse où le Client consent à communiquer des données individuelles à caractère personnel, il dispose d'un droit individuel d'accès, de retrait et de rectification de ces données dans les conditions prévues par la&nbsp; loi du 6 janvier 1978 modifiée et au RGPD du 27/04/2016 relative à l'informatique, aux fichiers et aux libertés. Le Client doit adresser toute demande écrite à l'adresse suivante&nbsp;: ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>À l'occasion de la création de son compte client sur le Site, le Client aura la possibilité de choisir s'il souhaite recevoir des offres du Vendeur et de ses partenaires.&nbsp;<span>&nbsp;</span><a href="http://www.francedirectshop.fr/protection-data/" aria-describedby="a11y-external-message">+INFO</a></p>
              <p><strong>12. Force Majeure&nbsp;</strong></p>
              <p>L'exécution par le Vendeur de ses obligations aux termes du présent Contrat sera suspendue en cas de survenance d'un cas fortuit ou de force majeure qui en gênerait ou en retarderait l'exécution.&nbsp;</p>
              <p>Le Vendeur avisera le Client de la survenance d'un tel cas fortuit ou de force majeure dans les 5 jours à compter de la date de survenance de l'événement.&nbsp;</p>
              <p>Lorsque la suspension de l'exécution des obligations du Vendeur se poursuit pendant une période supérieure à 15 jours, le Client a la possibilité de résilier la Commande en cours et le Vendeur procédera alors au remboursement de la Commande dans les conditions ci-dessus.&nbsp;</p>
              <p><strong>13. Nullité d'une Clause du Contrat</strong></p>
              <p>Si l'une quelconque des dispositions du présent Contrat était annulée, cette nullité n'entraînerait pas la nullité des autres dispositions du Contrat qui demeureront en vigueur entre les Parties.&nbsp;</p>
              <p><strong>14. Modification du Contrat</strong></p>
              <p>Tout amendement, résiliation ou abandon de l'une quelconque des clauses du présent Contrat ne sera valable qu'après accord écrit et signé entre les Parties.&nbsp;</p>
              <p><strong>15. Non-renonciation</strong></p>
              <p>Le fait pour l'une des Parties de ne pas se prévaloir d'un engagement par l'autre Partie à l'une quelconque des obligations visées par les présentes, ne saurait être interprété pour l'avenir comme une renonciation à l'obligation en cause.&nbsp;</p>
              <p>16. Réclamations et règlement amiable des litiges</p>
              <p>En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement à un médiateur de la consommation en vue de la résolution amiable du litige qui l'oppose à un professionnel. "&nbsp;</p>
              <p>Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges définis à l'article L. 151-1 du Code de la consommation à savoir les litiges de nature contractuelle, portant sur l'exécution d'un contrat de vente ou de fournitures de services, opposant un consommateur à un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers.&nbsp;</p>
              <p>Pour toute difficulté, nous vous invitons à nous contacter préalablement ou à contacter notre service après-vente :&nbsp;</p>
              <p>ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Service après-vente :</p>
              <p>ELITE TRADE AG</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Une plateforme de règlement des litiges en ligne est à votre disposition :&nbsp;</p>
              <p><a href="http://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">http://ec.europa.eu/consumers/odr/</a><span>.</span>&nbsp;</p>
              <p>Seules les réclamations relatives à la Vente en Ligne des Articles seront prises en compte.&nbsp;</p>
              <p>Dans l'année qui suivra votre demande auprès de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un médiateur dont trouverez ci-dessous les coordonnées, sachant qu'un litige ne pourra être examiné, sauf exception, que par un seul médiateur :&nbsp;</p>
              <p><em>Médiateur du commercer coopératif et associé</em></p>
              <p><em>http://www.mcca-mediation.fr</em>&nbsp;</p>
              <p>Litiges transfrontaliers :&nbsp;</p>
              <p>Centre européen des consommateurs France :&nbsp;</p>
              <p>europe-consommateurs.eu</p>
              <p>&nbsp;Vous pouvez, à vos frais, vous faire assister par un conseil.&nbsp;</p>
              <p><strong>16. Loi applicable</strong></p>
              <p>Le présent Contrat sera régi par la loi française et le tribunal compétent sera celui tel que défini par les lois françaises.</p>
  
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
