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


      </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
