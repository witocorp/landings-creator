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
                <a href="">Conditions générales de vente</a> <a href="">Garantie</a>  <a href="">Informations clients et données personnelles</a>  <a href="">Informations sur les cookies et protection de la vie privée</a>  <a href="">Mentions légales du site</a> 
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
              <h2 class="modal-title text-center pb-2" id="legalModal">Mentions légales du site</h2>
              <p>
                1. Informations légales 

                    Nom du site : ....

                    Nom de l’éditeur du site : ELITE TRADE AG

                    Siège social : 40/54
                    AVENUE SAINTE MARGUERITE
                    06200 NICE

                    Nom du responsable de la publication : ELITE TRADE AG

                    Adresse postale de contact : ELITE TRADE AG

                    40/54
                    AVENUE SAINTE MARGUERITE
                    06200 NICE

                    Adresse courriel : info01.elitebienetre@gmail.com

                    Hébergeur du site :

                    2. Accès au site

                    L'accès au site est réservé aux personnes majeures. L'éditeur se réserve le droit de demander toute justification de votre âge notamment si vous utilisez des services de commande en ligne. 

                    3. Contenu du site

                    Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.

                    Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites. 

                    En ce qui concerne les services de commande en ligne, l'ensemble des informations présentes sur ce site sont valables pour la France métropolitaine (Corse incluse) exclusivement. Pour toute commande destinée à d'autres destinations, vous devez demander via l'adresse e-mail de l'éditeur ci-dessous, les informations nécessaires. 

                    4. Gestion du site

                    Pour la bonne gestion du site, l'éditeur pourra à tout moment :

                    -          suspendre, interrompre ou de limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internaute ;

                    -          supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales, ou avec les règles de la Nétiquette ;

                    -          suspendre le site afin de procéder à des mises à jour 

                    5. Responsabilité

                    La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.

                    Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par ailleurs le seul responsable des sites et données que vous consultez.

                    L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :

                    -          du fait de l'usage du site ou de tout service accessible via Internet ;

                    -          du fait du non-respect par vous des présentes conditions générales.

                    L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.

                    Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire à raison de votre utilisation du site, il pourra retourner contre vous pour obtenir indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.

                     

                    6. Liens hypertextes

                    La mise en place par vous de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l'éditeur, sollicitée par courriel à l'adresse suivante : info01.elitebienetre@gmail.com

                    L'éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l'éditeur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l'éditeur.

                    Dans tous les cas, tout lien devra être retiré sur simple demande de l'éditeur.

                    Toute information accessible via un lien vers d'autres sites n'est pas sous le contrôle de l'éditeur qui décline toute responsabilité quant à leur contenu.

                     

                    7. Collecte des données personnelles

                    Voir page spécifique : https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles

                    8. Cookies

                    Voir page spécifique : https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles

                    9. Photographies et représentation des produits

                    Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.

                     

                    10. loi applicable

                    Les présentes conditions d'utilisation du site sont régies par la loi française et le droit applicable est le droit français. La langue utilisée durant les relations précontractuelles et contractuelles est le français.

                     

                    11. Réclamations et règlement amiable des litiges

                    En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement à un médiateur de la consommation en vue de la résolution amiable du litige qui l'oppose à un professionnel. " 

                    Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges définis à l'article L. 151-1 du Code de la consommation à savoir les litiges de nature contractuelle, portant sur l'exécution d'un contrat de vente ou de fournitures de services, opposant un consommateur à un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers.

                    Pour toute difficulté, nous vous invitons à nous contacter préalablement ou à contacter notre service après-vente : 

                    ELITE TRADE AG

                    40/54
                    AVENUE SAINTE MARGUERITE
                    06200 NICE

                    info01.elitebienetre@gmail.com

                    Service après-vente :

                    ELITE TRADE AG

                    info01.elitebienetre@gmail.com

                    Une plateforme de règlement des litiges en ligne est à votre disposition :  

                    Centre européen des consommateurs France : 

                    http://ec.europa.eu/consumers/odr/. 

                    Seules les réclamations relatives à la Vente en Ligne des Articles seront prises en compte. 

                    Dans l'année qui suivra votre demande auprès de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un médiateur dont trouverez ci-dessous les coordonnées, sachant qu'un litige ne pourra être examiné, sauf exception, que par un seul médiateur : 

                    Médiateur du commercer coopératif et associé

                    http://www.mcca-mediation.fr 

                    Litiges transfrontaliers : 

                    Centre européen des consommateurs France : 

                    europe-consommateurs.eu

                     Vous pouvez, à vos frais, vous faire assister par un conseil. 

                     

                    12. Contactez-nous

                    Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un message à l'adresse suivante : info01.elitebienetre@gmail.com
              </p>
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
                  La présente page est dédiée à la politique de protection de vie privée mise en œuvre par ELITE TRADE AG

                  La présente information complète celles relative aux données personnelles, établie conformément à la la loi n°78-17 du 16 janvier 1978 dite « Informatique et Libertés », disponible sous lien :

                  https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles

                  COLLECTE DE DONNEES PAR http://vibroflex.fr/

                  A quoi servent vos données ?

                  Comme indiqué sur la page https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles, les données collectées en vue de traitement informatique sont utilisées afin de permettre la gestion du compte utilisateur

                   

                  A qui sont destinées vos données ?

                  Les données collectées sur ce site sont à destination de la société ELITE TRADE AG , en sa qualité de responsable de traitement. 

                  Comment sont protégées vos données ?

                  http://vibroflex.fr prend toutes les précautions pour préserver la sécurité de vos données afin, notamment, d’empêcher leur divulgation à des tiers non-autorisés. A ce titre http://vibroflex.fr met en place toutes les mesures nécessaires pour la sécurisation de ses dispositifs informatiques. Dans l’hypothèse où vos données font l’objet du transfert auprès de sous-traitants (notamment pour leur hébergement), http://vibroflex.fr/ veille à ce que ces derniers présentent un niveau de sécurité conforme aux standards requis. 

                  Quels sont vos droits ?

                  Conformément aux dispositions des articles 38 et suivants de la loi du 6 Janvier 1978 dite « Informatique et Libertés », vous disposez d’un droit d’accès, de rectification et d’opposition aux traitement de données.

                  Pour en connaitre les modalités, rendez-vous sur la page INFORMATIONS CLIENT ET DONNEES PERSONNELLE : https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles

                   

                  ENREGISTREMENT DE DONNEES AU MOYEN DE COOKIES

                   Qu’est-ce qu’un cookie ?

                  Lorsque vous consultez un site Internet, l’éditeur du site peut être amené à déposer un fichier texte sur votre ordinateur. Ce fichier est déposé par l’utilisation de votre logiciel de navigation : c’est ce fichier qui est appelé « cookie ». Les informations stockées relatives à votre navigation sur notre site internet (http://vibroflex.fr/) concernent notamment les paramètres de langue, le temps de connexion, pages visitées,

                  Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant le site http://vibroflex.fr/, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.

                  Nous attirons votre attention sur le fait que le partage de l’utilisation de votre terminal avec d’autres personnes est susceptible de modifier le caractère personnalisé de l’action des cookies. 

                  Quels sont les types de cookies utilisés par http://vibroflex.fr/ ?

                  http://vibroflex.fr utilise des « cookies » visant à faciliter votre navigation. Il s’agit notamment des cookies suivants :

                  les cookies utilisés comme « panier d’achat »
                  les cookies de « session utilisateur » (SessionID)
                  les cookies ayant pour finalité d’enregistrer la langue de l’utilisateur pour faciliter sa navigation
                  les cookies flash contenant des éléments strictement nécessaires pour faire fonctionner un lecteur de média (audio ou vidéo) correspondant à un contenu demandé par l’utilisateur.
                   

                  http://vibroflex.fr peut également être amené à utiliser les cookies ayant pour finalité de nous renseigner sur les produits, services et pages que vous consultez. Ces cookies nous permettent de vous proposer un contenu personnalisé et notamment d’afficher lors de votre connexion sur notre site des publicités ciblées en rapport avec vos attentes.

                  Ces cookies peuvent être paramétrés selon vos choix, tels que décrits dans la section ci-dessous. En cas de refus des cookies nous permettant d’identifier les produits, services et pages que vous consultez, le contenu de votre navigation ne sera pas personnalisé et les publicités affichées pourront être sans intérêt pour vous.

                   

                  http://vibroflex.fr permet-il à des tiers d’utiliser des Cookies lors de ma navigation ?

                  Le site http://vibroflex.fr/ utilise Google Analytics™, un service d’analyse de site internet fourni par Google Inc. Google Analytics utilise des cookies, qui sont des fichiers texte placés sur votre terminal, pour aider le site internet à analyser l’utilisation du site par ses utilisateurs et à réaliser des statistiques. Les données générées par les cookies concernant votre utilisation du site (y compris votre adresse IP à sont transmises et stockées par Google sur des serveurs situés aux Etats-Unis. Google utilisera cette information dans le but d’évaluer votre utilisation du site, de compiler des rapports sur l’activité du site à destination de son éditeur et de fournir d’autres services relatifs à l’activité du site et à l’utilisation d’internet. Google est susceptible de communiquer ces données à des tiers en cas d’obligation légale ou lorsque ces tiers traitent ces données pour le compte de Google, notamment l’éditeur de ce site. Google ne recoupera pas votre adresse IP avec toute autre donnée détenue par Google. Vous pouvez désactiver l’utilisation de cookies en sélectionnant les paramètres appropriés de votre navigateur (cf.ci-dessous). Cependant, une telle désactivation pourrait empêcher l’utilisation de certaines fonctionnalités de ce site. En utilisant ce site internet, vous consentez expressément au traitement de vos données nominatives par Google dans les conditions et pour les finalités décrites ci-dessus. Pour consulter les Règles de confidentialité Google cliquez ici.

                  Google a adhéré aux principes relatifs à la protection des données « Safe Harbor Privacy Principles » établies par le département du Commerce américain. Ces principes, négociés entre les autorités américaines et la Commission européenne en 2001, sont essentiellement basés sur ceux de la Directive 95/46 du 24 octobre 1995 et assurent une protection adéquate pour les transferts de données en provenance de l’Union européenne vers des entreprises établies aux Etats-Unis.

                   

                  Comment exercer votre choix concernant les cookies ?

                  Paramètres du navigateur et conséquences de vos choix :

                  Plusieurs possibilités vous sont offertes pour gérer les cookies. A tout moment, vous pouvez exprimer et modifier vos souhaits en matière de cookies, via la section Aide de la barre d’outils de votre navigateur, Celle-ci vous indique comment refuser les nouveaux « cookies » ou obtenir un message qui vous signale leur réception ou encore comment désactiver les « cookies » soit systématiquement, soit selon leur émetteur. Vous pouvez également effacer les cookies manuellement.

                  Vous pouvez aussi choisir de désactiver ou de supprimer des données similaires utilisées par des logiciels accessoires à votre navigateur, tels que les Flash cookies, en modifiant les paramètres de ces logiciels ou en visitant le site Internet de l’éditeur de ces logiciels. 

                  Attention, il est possible que cette configuration de votre navigateur vous empêche l’accès à certains contenus ou perturbe significativement votre navigation et les services que vous attendez de la part de notre site.

                  Dans pareille hypothèse, ELITE TRADE AG décline toute responsabilité concernant les conséquences liées au comportement dégradé du site http://vibroflex.fr/ résultant de l’impossibilité d’utiliser les cookies nécessaires à son fonctionnement.

                   

                  Choix selon navigateur internet :

                  Pour la gestion des cookies, chaque navigateur propose un process différent de configuration. Il est décrit dans le menu d’ « aide » de votre navigateur, qui vous permettra de savoir comment exprimer vos choix concernant les cookies :

                  Pour Internet Explorer™ : ouvrez le menu « Outils », puis sélectionnez « Options Internet » ; cliquez sur l’onglet « Confidentialité » puis l’onglet « Avancé » choisissez le niveau souhaité ou suivez ce lien
                  Pour Firefox™ : ouvrez le menu « Outils », puis sélectionnez « Options » ; cliquiez sur l’onglet « Vie privée » puis choisissez les options souhaitées ou suivez ce lien
                  Pour Chrome™ : ouvrez le menu de configuration (logo clé à molette), puis sélectionnez « Options » ; cliquez sur « Options avancées » puis dans la section « Confidentialité » cliquez sur « Paramètres de contenu » et choisissez les options souhaitées ou suivez ce lien
                  Pour Safari™ : choisissez « Safari », « Préférences » puis cliquez sur Sécurité » : Dans la section « Accepter les cookies » choisissez les options souhaitées ou suivez ce lien :
                  Pour Opéra™ : ouvrez le menu « Outils » ou « Réglages », puis sélectionnez « Supprimer les données privées » ; cliquez sur l’onglet « Options détaillées », puis choisissez les options souhaitées ou suivez ce lien
                   

                  Votre choix sur mobile

                  Pour spécifier si Safari accepte ou non des cookies :
                  Dans l’écran principal, choisissez Réglages > Safari
                  Touchez « Acceptez les cookies » et choisissez « Jamais », « Des sites visités » ou « Toujours ».
                  Pour effacer tous les cookies dans Safari :
                  Dans l’écran principal, choisissez Réglages > Safari
                  Touchez  effacer les cookies.
                  Pour supprimer les cookies sur Android :
                  Menu > Paramètres > Effacer tous les cookies
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
                Information de Base sur la protección de données
                Identité : ELITE TRADE AG

                Nº Registre : 81539277400015

                Adresse Postale : 40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                Courrier Électronique : info01.elitebienetre@gmail.com

                 OBJECTIFS

                ENVOI DES COMMANDES

                1.- Gérer vos demandes d'information et vos commandes

                Nous utiliserons vos données pour gérer toute demande d'information que vous nous ferez et pour vous remettre les commandes que vous nous ferez.

                2. - Envoi d'information commerciale et de publicité de nos produits

                Nous utiliserons vos données pour vous envoyer des communications commerciales sur nos produits dont nous pensons qu'ils peuvent vous intéresser par tout moyen, automatisé ou non (courrier, SMS, MMS, fax, Internet, téléphone…), en utilisant l'information dont nous disposons sur vos transactions et vos préférences. Vous pouvez vous opposer à tout moment au traitement de vos données à cet effet, selon ce qui est spécifié au paragraphe 

                4. - Envoi d'information commerciale d'entreprises tierces.

                Nous demandons votre consentement pour l'utilisation de vos données afin de vous envoyer des communications commerciales d'entreprises tierces dont nous pensons qu'elles peuvent vous intéresser par tout moyen, automatisé ou non (courrier, SMS, MMS, fax, Internet, téléphone…).

                Vous pouvez vous opposer à tout moment au traitement de vos données dans ce but, selon ce qui est spécifié au paragraphe.

                Les données fournies seront conservées pendant la relation commerciale avec notre entreprise, tant que leur suppression ne sera pas demandée par l'intéressé.

                 

                LÉGITIMATION
                Le traitement de vos données pour l'envoi de vos commandes se base sur l'exécution du contrat. L'offre prospective de nos produits se base sur l'intérêt légitime et les entreprises tierces se base sur le consentement de l'intéressé.

                 

                DROITS
                Toute personne a le droit d'obtenir une confirmation pour savoir si ELITE TRADE AG traite ou non des données personnelles qui la concernent.

                Les personnes intéressées ont le droit d’accéder à leurs données personnelles, et à demander la rectification des données inexactes ou, le cas échéant, demander la suppression si, entre autres raisons, les données ne sont plus nécessaires pour les objectifs pour lesquels elles ont été recueillies.

                Dans certains cas, les intéressés pourront demander la limitation du traitement de leurs données, cas dans lequel nous les conserverons uniquement pour l'exercice ou la défense de réclamations. Dans certaines circonstances et pour des raisons concernant leur situation particulière, les intéressés pourront s'opposer au traitement de leurs données.

                ELITE TRADE AG cessera de traiter les données, sauf pour des motifs légitimes impérieux, ou pour exercer la défense de réclamations éventuelles. Si vous exercez le droit d'opposition à l'envoi de publicité, vos données seront incluses dans un listing d'exclusion publicitaire qui est destiné à diminuer la publicité que vous recevez.

                Les personnes intéressées ont le droit à la portabilité de leurs données.

                L'intéressé a également le droit de retirer à tout moment le consentement donné.

                Pour exercer vos droits, nous vous demandons de nous communiquer la demande par écrit à Vibroflex en indiquant votre prénom, vos noms de famille, votre adresse, accompagné d'une copie de votre document officiel d'identification, par téléphone au nº 02 78 88 00 81 ou de nous envoyer un e-mail à : info01.elitebienetre@gmail.com

                 Mineurs.

                Les moins de 14 ans doivent s'abstenir de nous indiquer leurs données personnelles Vous pouvez consulter la politique de confidentialité sur
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
              <p>
                Le présent site Internet vibroflex.fr (le " Site Internet") est édité par la société ELITE TRADE AG. 40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                Email : info01.elitebienetre@gmail.com, numéro de téléphone:01 86 65 00 05 (offre valable uniquement sur la France métropolitaine) 

                Préambule 

                Le Vendeur a pour activité la vente de biens à distance de produits de bien-être et de grande consommation. 

                Le Vendeur assure notamment la commercialisation des biens et/ou services susmentionnés par l'intermédiaire du site vibroflex.fr. La liste des biens et services proposés à la vente en ligne par le Vendeur peut être consultée sur le site disponible à l'adresse vibroflex.fr

                Les Parties conviennent que leurs relations seront régies exclusivement par le présent contrat, à l'exclusion de toute condition préalablement disponible sur le site web du Vendeur. 

                Le Vendeur se réserve le droit de modifier à tout moment les présentes conditions générales de vente en publiant une nouvelle version sur le Site. Les conditions générales de vente sont celles en vigueur à la date de validation de la commande. Les Parties conviennent que les photos des Biens en vente sur le site vibroflex.fr n'ont aucune valeur contractuelle. 

                1. Définitions

                Les termes et expressions visés ci-après signifient, lorsqu'ils sont précédés d'une lettre majuscule, pour les besoins de l'interprétation et de l'exécution des présentes : 

                " Article " : le ou les Biens ayant fait l'objet de la Commande ; 

                " Bien " : tout produit proposé à la vente sur le Site ; 

                " Commande " : demande de Biens ou Services réalisée par le Client auprès du Vendeur ; 

                " Conditions Générales de Vente " : les conditions générales de vente qui font l'objet des présentes ; 

                " Contrat " : le présent acte, y compris son préambule et ses annexes ainsi que tout amendement, substitution, extension ou renouvellement intervenu aux présentes en vertu de la convention des Parties ; 

                " Délai de Livraison " : période entre la date de Validation de la Commande et la date de la Livraison de la Commande au Client ;

                 " Frais de Livraison " : coût des frais engagés par le Vendeur pour acheminer la Commande à l'adresse de Livraison indiquée par le Client ; 

                " Livraison " : expédition de l'Article au Client ; 

                " Mode de Livraison " : désigne tout mode de livraison standard ou express disponible sur le Site au moment de la Commande ; 

                " Prix " : la valeur unitaire d'un Bien ou d'un Service ; cette valeur s'entend toutes taxes comprises et hors Frais de Livraison ; 

                " Prix Total " : le montant total des Prix cumulés des Biens et Services qui font l'objet de la Commande ; ce montant s'entend toutes taxes comprises ; 

                " Prix Tout Compris " : le Prix Total auquel est ajouté le prix des Frais de Livraison ; ce montant s'entend toutes taxes comprises ; 

                " Service " : tout service proposé à la vente sur le Site ; 

                 " Site " : site de Vente en Ligne "vibroflex.fr " utilisé par le Vendeur pour la commercialisation de ses Biens / Services ; 

                " Territoire " : a le sens donné à ce terme à l'Article 3 ; 

                " Validation de la Commande " : a le sens donné à l'Article 5 ; 

                " Vente en Ligne " : commercialisation des Biens et Services du Vendeur via le Site ; 

                Les références aux Articles sont des références aux articles du présent Contrat, à moins qu'il n'en soit disposé autrement.

                Toute référence au singulier inclut le pluriel et inversement.

                Toute référence à un genre inclut l'autre genre. 

                2. Objet

                Le présent Contrat a pour objet de définir les droits et obligations des Parties dans le cadre de la Vente en Ligne des Biens et Services proposés à la vente par le Vendeur au Client. 

                3. Champ d’application

                Les présentes Conditions Générales de Vente sont réservées aux seuls consommateurs, au sens qu'en donnent la loi et la jurisprudence, agissant exclusivement pour leur propre compte et domiciliés en France Métropolitaine 

                Conformément aux articles L. 111-1 et L. 111-3 du Code de la consommation, les caractéristiques essentielles et les prix des Biens et Services vendus par voie électronique sont disponibles sur le Site du vendeur. 

                Le professionnel communique également au consommateur les informations relatives à son identité, à ses coordonnées postales, téléphoniques et électroniques et à ses activités, ainsi que, s'il y a lieu, celles relatives aux garanties légales, aux fonctionnalités du contenu numérique et, le cas échéant, à son interopérabilité, à l'existence et aux modalités de mise en œuvre des garanties et aux autres conditions contractuelles, conformément aux articles R. 111-1 et R. 111-2 du Code de la consommation. 

                Par ailleurs, le Client reçoit les informations prévues aux  articles L. 121-8 et L. 121-19 du Code de la consommation, préalablement et postérieurement à la conclusion de la vente et notamment au moyen des présentes Conditions Générales de Vente. 

                Les présentes Conditions Générales de Vente sont applicables à toutes les ventes de Biens et Services par le Vendeur intervenues par le biais du Site. 

                Le Client déclare avoir pris connaissance des présentes Conditions Générales de Vente avant la Validation de la Commande au sens de l'Article 5. La Validation de la Commande vaut donc acceptation sans restriction ni réserve des présentes Conditions Générales de Vente. Les présentes Conditions Générales de Vente sont applicables pour les Commandes réalisées en vue d'une Livraison en France métropolitaine, y compris la Corse] (le " Territoire ").

                Les présentes Conditions Générales de Vente sont applicables y compris en ce qui concerne le moyen de paiement des commandes. 

                4. Entrée en vigueur et Durée

                Le présent Contrat entre en vigueur à la date de Validation de la Commande telle que définie à l'Article 5.

                Le Contrat est conclu pour la durée nécessaire à la fourniture des Biens et Services, jusqu'à l'extinction des garanties et obligations dues par le Vendeur. 

                5. Commande des Biens et Services et Étapes de Conclusion de la Vente en Ligne 

                Afin de réaliser la Commande, le Client devra obligatoirement suivre les étapes suivantes : 

                1. Se rendre sur l'adresse du Site ; 

                2. Suivre les instructions du Site et en particulier, les instructions nécessaires à l'ouverture d'un compte client ; 

                3. Remplir le formulaire de commande. En cas d'inactivité prolongée lors de la connexion, il est possible que la sélection des Biens et Services choisis par le Client avant cette inactivité ne soit plus garantie. Le Client est alors invité à reprendre sa sélection de Biens et Services depuis le début ; 

                4. Vérifier les éléments de la Commande et le cas échéant, identifier et corriger les erreurs ; 

                5. Valider la Commande, le Prix Total ainsi que le Prix Tout Compris (la " Validation de la Commande ") ; 

                6. Suivre les instructions du serveur de paiement en ligne pour payer le Prix Tout Compris. 

                Le Client reçoit ensuite par voie électronique et sans délai une confirmation d'acceptation de paiement de la Commande. 

                Le Client reçoit également par voie électronique et sans délai un accusé réception valant confirmation de la Commande (la " Confirmation de la Commande "). 

                La Livraison aura lieu à l'adresse de livraison indiquée par le Client lors de la Commande. Lors de la réalisation des différentes étapes de la Commande susmentionnées, le Client s'engage à respecter les présentes conditions contractuelles par application de l'article 1316-1 du Code civil. 

                Le Vendeur s'engage à honorer la Commande uniquement dans la limite des stocks disponibles des Biens. À défaut de disponibilité des Biens, le Vendeur s'engage à en informer le Client. 

                Conformément à l'article L. 122-1 du Code de la consommation, le Vendeur se réserve le droit de refuser la Commande si elle est anormale, passée de mauvaise foi ou pour tout autre motif légitime, et notamment, lorsqu'il existe un litige avec le Client concernant le paiement d'une commande antérieure. 

                6. Prix des Biens et Services et Conditions de Validité 

                Le Prix des Biens et Services vendus sur le Site est indiqué respectivement par article et référence ou par prestation et par référence.

                Au moment de la Validation de la Commande, le prix à payer s'entend du Prix Tout Compris.

                Les frais de télécommunication inhérents à l'accès au Site restent à la charge exclusive du Client.

                La durée de validité des offres et Prix est déterminée par l'actualisation du Site, et sous réserve des stocks disponibles.

                 

                7. Conditions et moyens de paiement

                Le paiement du Prix Tout Compris par le Client s'effectue par l'intermédiaire de l'un des moyens de paiement suivants :

                - Soit par carte bancaire (Visa, Mastercard, …)

                - Soit par compte PAYPAL : PayPal est un service de paiement électronique dématérialisé qui permet de payer en ligne, d'envoyer et de recevoir de l'argent sans partager les informations bancaires. Qu’est-ce que PayPal? 

                La transaction est immédiatement débitée sur la carte bancaire du Client après vérification des données de celle-ci, à réception de l'autorisation de débit de la part de la société émettrice de la carte bancaire utilisée par le Client. 

                Conformément à l'article L. 132-2 du Code monétaire et financier, l'engagement de payer donné au moyen d'une carte de paiement est irrévocable. En communiquant les informations relatives à sa carte bancaire, le Client autorise le Vendeur à débiter sa carte bancaire du montant correspondant au Prix Tout Compris. Ce prix prendra en compte la Taxe sur la Valeur Ajoutée (et/ou de toute autre taxe notamment environnementale pouvant être créée par la réglementation) ainsi que, le cas échéant, les éventuelles réductions consenties au travers d’opérations promotionnelles.

                À cette fin, le Client confirme qu'il est le titulaire de la carte bancaire à débiter et que le nom figurant sur la carte bancaire est effectivement le sien. Le Client communique les seize chiffres et la date d'expiration de sa carte bleue ainsi que le cas échéant, les numéros du cryptogramme visuel.

                Dans le cas où le débit du Prix Tout Compris serait impossible, la Vente en Ligne serait immédiatement résolue de plein droit et la Commande serait annulée.

                Le Vendeur met en œuvre tous les moyens disponibles en sa possession pour assurer la confidentialité et la sécurité des données transmises sur le Site vibroflex.fr

                7. Livraison de la commande

                7.1 Mode de Livraison

                Le Client choisit l'un des Modes de Livraison proposés sur le Site à l'occasion de la réalisation de la Commande. 

                7.2 Adresse de Livraison

                Le Client choisit une adresse de Livraison nécessairement située sur le Territoire, sous peine de refus de la Commande. Le Client est seul responsable d'un défaut de Livraison dû à un manque d'indication lors de la Commande. 

                7.3 Montant des Frais de Livraison

                Le montant des Frais de Livraison dépend du montant de la Commande et du mode de livraison choisi par le Client. Les Prix s’entendent hors frais de livraison (port, emballage et confection du colis selon montants en vigueur et communiqués au client). En tout état de cause, le montant des Frais de Livraison est indiqué au Client avant la Validation de la Commande. 

                7.4 Délais de Livraison

                Les Délais de Livraison sont disponibles sur le Site et peuvent varier en fonction de la disponibilité des Biens ayant fait l'objet de la Commande.

                Les Délais de Livraison s'entendent en jours ouvrés et correspondent aux délais moyens de préparation et d'acheminement de la Commande sur le Territoire.

                Les Délais de Livraison courent à compter de la date de Confirmation de la Commande par le Vendeur. 

                7.5. Retard de Livraison [à valider par ELITE TRADE AG]

                En cas de retard de Livraison, la Commande n'est pas annulée.

                Le Vendeur informe le Client par courrier que la Livraison interviendra avec du retard. Le Client pourra alors décider d'annuler la Commande et enverra par tout moyen (mail, courrier) au Vendeur un avis d'annulation de la Commande.

                Dans le cas où la Commande n'a pas encore été expédiée lors de la réception par le Vendeur de l'avis d'annulation du Client, la Livraison est bloquée et le Client est remboursé des sommes éventuellement débitées dans un délai de quatorze jours suivant la réception de l'avis d'annulation. Dans le cas où la Commande a déjà été expédiée lors de la réception par le Vendeur de l'avis d'annulation du Client, le Client peut encore annuler la Commande en refusant le colis. Le Vendeur procédera alors au remboursement des sommes débitées et des frais de retour déboursés par le Client dans un délai de quatorze jours suivant la réception du retour du colis refusé complet et dans son état d'origine. 

                7.6 Vérification de la Commande à son arrivée

                Le Client est tenu de vérifier l'état de l'emballage ainsi que les Articles lors de la Livraison.

                Il appartient au Client d'émettre les réserves et les réclamations qu'il estime nécessaires, voire de refuser le colis, lorsque le colis est manifestement endommagé à la Livraison. Lesdites réserves et réclamations doivent être adressées au transporteur par lettre recommandée avec demande d'avis de réception dans les trois jours ouvrables, non compris les jours fériés, qui suivent la date de la Livraison des Biens. 

                Le Client doit par ailleurs faire parvenir une copie de cette lettre au Vendeur. Le défaut de réclamation dans le délai susmentionné éteint toute action contre le transporteur conformément à l'article L. 133-3 du Code de commerce. Le Client doit s'assurer que les Biens qui lui ont été livrés correspondent à la Commande. En cas de non-conformité des Biens en nature ou en qualité aux spécifications mentionnées dans le bon de Livraison, le Client doit informer ELITE TRADE AG. par courrier électronique et renvoyer les Biens à l'adresse indiquée. 

                8. Délai de rétractation

                Conformément aux articlesL221-18 et suivants du Code de la Consommation, vous disposez d'un délai de rétractation de 14 jours à compter du jour de réception de  votre commande, sans avoir à justifier de motifs ni à payer de pénalités, à l’exception des frais de retour


                Le décompte du délai de 14 jours commence le lendemain de la livraison de votre commande. Si ce délai expire un samedi, un dimanche ou un jour férié, il est prolongé jusqu'au premier jour ouvrable suivant.


                Dans le cas d’une commande livrée en plusieurs fois, le délai cours à compter de la réception du dernier bien faisant partie d’une même commande.

                Afin d’exercer votre droit de rétractation, vous pouvez renvoyer par voie postale le formulaire de rétractation disponible ici,* ou tout autre écrit exprimant votre volonté de rétractation, à l’adresse suivante :
                ELITE TRADE AG 15, 40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                Vous pouvez aussi exercer votre droit de rétractation par téléphone :02 78 88 00 81 ou par e-mail: info01.elitebienetre@gmail.com


                Vous devrez alors retourner le(s) produit(s) à ELITE TRADE AG au plus tard dans les 14 jours suivantl’envoi de votre rétractation.

                Le Client doit renvoyer le(s) article(s) neufs emballés, accompagné(s) de tous les accessoires éventuels, cadeaux, notices d'emploi et documentations à l'adresse suivante:« ELITE TRADE AG c/o -

                ELITE TRADE AG vous rembourse la totalité de votre commande (produits + frais de livraison initiaux), à l’exception des coûts directs de renvoi.

                Les éventuels frais supplémentaires découlant du choix d’un mode de livraison plus coûteux que le mode de livraison initial ne pourront vous être remboursés.

                Sauf accord contraire, le remboursement est toujours effectué selon le mode de paiement initial utilisé au moment de l’achat.  ELITE TRADE AG s’engage à effectuer le remboursement des produits dans les meilleurs délais et, en tout cas, dans les 14 jours à compter de la date à laquelle ELITE TRADE AG aura récéptionné les biens ou de la date à laquelle le consommateur aura fourni une preuve de l´expédition des biens.

                La dépréciation des biens résultant de manipulations autres que celles nécessaires pour établir la nature, les caractéristiques et le bon fonctionnement de ces biens pourrait contraindre ELITE TRADE AG à diminuer le montant du remboursement en conséquence.

                 
                FORMULAIRE DE RETRACTATION

                A l'attention de ELITE TRADE AG

                 

                Numéro de téléphone de ELITE TRADE AG : 02 78 88 00 81

                Adresse de courrier électronique de ELITE TRADE AG: info01.elitebienetre@gmail.com

                Adresse postale de ELITE TRADE AG: 40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                 

                Je vous notifie par la présente ma rétractation du contrat portant sur la vente du PRODUIT ci-dessous :

                 

                Référence du PRODUIT : [______________________]

                N° de la facture : [___________________]

                N° du bon de commande : [________________]

                Commandé le [____________] / reçu le [________________]

                Moyen de paiement utilisé : [____________________]

                Nom du CLIENT : [____________________]

                Adresse du CLIENT : [_______________________]

                Adresse de livraison : [_________________________]

                Courriel du CLIENT : [_______________________]

                Signature du CLIENT (sauf cas de transmission par courriel)

                Date : [___ / ___ / ___ ]

                 

                9. Garantie

                Le Vendeur est soumis aux conditions de garanties légales prévues aux  articles L. 211-4, L. 211-5 et L. 211-12 du Code de la consommation  et aux  articles 1641 et 1648 du Code civil, ci-après reproduits : 

                Art. L. 211-4 du Code de la consommation : " Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité". 

                Art. L. 211-5 du Code de la consommation : "Pour être conforme au contrat, le bien doit : 

                1° Etre propre à l'usage habituellement attendu d'un bien semblable et, le cas échéant :- correspondre à la description donnée par le vendeur et posséder les qualités que celui-ci a présentées à l'acheteur sous forme d'échantillon ou de modèle ;- présenter les qualités qu'un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l'étiquetage ; 

                2° Ou présenter les caractéristiques définies d'un commun accord par les parties ou être propre à tout usage spécial recherché par l'acheteur, porté à la connaissance du vendeur et que ce dernier a accepté". 

                Art. L. 211-12 du Code de la consommation : "L'action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien". 

                Art. 1641 du Code civil : " Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre à l'usage auquel on la destine, ou qui diminuent tellement cet usage que l'acheteur ne l'aurait pas acquise, ou n'en aurait donné qu'un moindre prix, s'il les avait connus". 

                Art. 1648 du Code civil : " L'action résultant des vices rédhibitoires doit être intentée par l'acquéreur dans un délai de deux ans à compter de la découverte du vice. Dans le cas prévu par l'article 1642-1, l'action doit être introduite, à peine de forclusion, dans l'année qui suit la date à laquelle le vendeur peut être déchargé des vices ou des défauts de conformité apparents". 

                10. Droits de propriété intellectuelle 

                 Les marques du Vendeur ELITE TRADE AG, ainsi que l'ensemble des marques figuratives ou non et plus généralement toutes les autres marques, illustrations, images et logotypes figurant sur les Biens, leurs accessoires et leurs emballages, qu'ils soient déposés ou non, sont et demeureront la propriété exclusive du Vendeur. Toute reproduction totale ou partielle, modification ou utilisation de ces marques, illustrations, images et logotypes, pour quelque motif et sur quelque support que ce soit, sans accord exprès et préalable du Vendeur, est strictement interdite. Il en est de même de toute combinaison ou conjonction avec toute autre marque, symbole, logotype et plus généralement tout signe distinctif destiné à former un logo composite. Il en est de même pour tout droit d'auteur, dessin, modèle et brevet qui sont la propriété du Vendeur. 

                11. Confidentialité des Données 

                 Les informations demandées au Client sont nécessaires au traitement de la Commande. Dans l'hypothèse où le Client consent à communiquer des données individuelles à caractère personnel, il dispose d'un droit individuel d'accès, de retrait et de rectification de ces données dans les conditions prévues par la  loi du 6 janvier 1978 modifiée et au RGPD du 27/04/2016 relative à l'informatique, aux fichiers et aux libertés. Le Client doit adresser toute demande écrite à l'adresse suivante : ELITE TRADE AG

                40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                À l'occasion de la création de son compte client sur le Site, le Client aura la possibilité de choisir s'il souhaite recevoir des offres du Vendeur et de ses partenaires.  +INFO

                12. Force Majeure 

                L'exécution par le Vendeur de ses obligations aux termes du présent Contrat sera suspendue en cas de survenance d'un cas fortuit ou de force majeure qui en gênerait ou en retarderait l'exécution. 

                Le Vendeur avisera le Client de la survenance d'un tel cas fortuit ou de force majeure dans les 5 jours à compter de la date de survenance de l'événement. 

                Lorsque la suspension de l'exécution des obligations du Vendeur se poursuit pendant une période supérieure à 15 jours, le Client a la possibilité de résilier la Commande en cours et le Vendeur procédera alors au remboursement de la Commande dans les conditions ci-dessus. 

                13. Nullité d'une Clause du Contrat

                Si l'une quelconque des dispositions du présent Contrat était annulée, cette nullité n'entraînerait pas la nullité des autres dispositions du Contrat qui demeureront en vigueur entre les Parties. 

                14. Modification du Contrat

                Tout amendement, résiliation ou abandon de l'une quelconque des clauses du présent Contrat ne sera valable qu'après accord écrit et signé entre les Parties. 

                15. Non-renonciation

                Le fait pour l'une des Parties de ne pas se prévaloir d'un engagement par l'autre Partie à l'une quelconque des obligations visées par les présentes, ne saurait être interprété pour l'avenir comme une renonciation à l'obligation en cause. 

                16. Réclamations et règlement amiable des litiges

                En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement à un médiateur de la consommation en vue de la résolution amiable du litige qui l'oppose à un professionnel. " 

                Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges définis à l'article L. 151-1 du Code de la consommation à savoir les litiges de nature contractuelle, portant sur l'exécution d'un contrat de vente ou de fournitures de services, opposant un consommateur à un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers. 

                Pour toute difficulté, nous vous invitons à nous contacter préalablement ou à contacter notre service après-vente : 

                ELITE TRADE AG

                40/54
                AVENUE SAINTE MARGUERITE
                06200 NICE

                info01.elitebienetre@gmail.com

                Service après-vente :

                ELITE TRADE AG

                info01.elitebienetre@gmail.com

                Une plateforme de règlement des litiges en ligne est à votre disposition : 

                http://ec.europa.eu/consumers/odr/. 

                Seules les réclamations relatives à la Vente en Ligne des Articles seront prises en compte. 

                Dans l'année qui suivra votre demande auprès de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un médiateur dont trouverez ci-dessous les coordonnées, sachant qu'un litige ne pourra être examiné, sauf exception, que par un seul médiateur : 

                Médiateur du commercer coopératif et associé

                http://www.mcca-mediation.fr 

                Litiges transfrontaliers : 

                Centre européen des consommateurs France : 

                europe-consommateurs.eu

                 Vous pouvez, à vos frais, vous faire assister par un conseil. 

                16. Loi applicable

                Le présent Contrat sera régi par la loi française et le tribunal compétent sera celui tel que défini par les lois françaises.
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
