var contador = 0;
var contactual = 0;
var editor = new Array();
(function () {
  editor.push(
    new FroalaEditor("#editH", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editF", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#myCarousel", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editMb", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editMb1", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editMb2", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editMb3", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  editor.push(
    new FroalaEditor("#editMb4", {
      toolbarButtons: [
        "bold",
        "italic",
        "underline",
        "insertLink",
        "insertImage",
        "html",
      ],
      imageInsertButtons: ["imageByURL"],
    })
  );
  $("[data-id-creator]").each(function () {
    contactual = $(this).data("idCreator");
    if (contactual > contador) {
      contador = contactual;
    }
    editor.push(
      new FroalaEditor("#edit" + contactual, {
        toolbarButtons: [
          "bold",
          "italic",
          "underline",
          "insertLink",
          "insertImage",
          "html",
        ],
        imageInsertButtons: ["imageByURL"],
        htmlRemoveTags: []
      })
    );
  });
  contador++;
})();
$(document).ready(function () {
   //$(".shopify-buy-frame iframe").remove();
   $(".shopify-buy-frame").empty();
   $(function () {
    $(".column").sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",
    });

    $(".portlet")
      .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
      .find(".portlet-header")
      .addClass("ui-widget-header ui-corner-all")
      .prepend(
        "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
      );

    $(".portlet-toggle").on("click", function () {
      var icon = $(this);
      icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
    });
  });
  $("#c1").on("click", function () {
    $("#myCarousel .fr-element").html(
      '<div class="carousel-inner"> <div class="carousel-item active"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption text-start"> <h1>Example headline.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  </div> </div> </div> </div>'
    );
  });
  $("#c2").on("click", function () {
    $("#myCarousel .fr-element").html(
      '<ol class="carousel-indicators"> <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li> <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li></ol> <div class="carousel-inner"> <div class="carousel-item active"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption text-start"> <h1>Example headline.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  </div> </div> </div> <div class="carousel-item"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption"> <h1>Another example headline.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> </div> </div> </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </a>'
    );
  });
  $("#c3").on("click", function () {
    $("#myCarousel .fr-element").html(
      '<ol class="carousel-indicators"> <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li> <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li> <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li> </ol> <div class="carousel-inner"> <div class="carousel-item active"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption text-start"> <h1>Example headline.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  </div> </div> </div> <div class="carousel-item"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption"> <h1>Another example headline.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> </div> </div> <div class="carousel-item"> <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%"> <div class="container"> <div class="carousel-caption text-end"> <h1>One more for good measure.</h1> <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> </div> </div> </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </a>'
    );
  });
  $("#t1").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row justify-content-center pt-5"> <div class="col col-md-8 text-center"> <h1>Lorem Ipsum</h1> </div> </div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn1").on("click", function () {
    $("#anexos").append(
      //'<div class="container" id="edit'+contador+'" data-id-creator="'+contador+'"><div class="eliminar_box">X</div> <div class="row justify-content-center"> <div class="col col-md-8 text-center"> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. Phasellus ut nulla a velit ullamcorper fermentum et non erat. Donec eget ex ex. Sed interdum dignissim tincidunt.</p> </div> </div> </div>'
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row justify-content-center py-5"> <div class="col col-md-8 text-center"> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. Phasellus ut nulla a velit ullamcorper fermentum et non erat. Donec eget ex ex. Sed interdum dignissim tincidunt.</p> </div> </div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
          htmlRemoveTags: [],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn2").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row py-5"> <div class="col"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. Phasellus ut nulla a velit ullamcorper fermentum et non erat. Donec eget ex ex. Sed interdum dignissim tincidunt.</p> </div> <div class="col-12 col-md-6"> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. Phasellus ut nulla a velit ullamcorper fermentum et non erat. Donec eget ex ex. Sed interdum dignissim tincidunt.</p> </div> </div> </div> </div> </div></div>'
    );
    (function () {
      editor.push(
        FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn3").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row align-items-center py-5"> <div class="col-12 col-md-6 col-lg-6"> <h1>Design Blocks</h1> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. </p> </div> <div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0 mb-5 mb-md-0 text-center"> <img alt="image" class="img-fluid" src="img/noimage.png"> </div> </div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn4").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row align-items-center py-5"><div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0 mb-5 mb-md-0 text-center"> <img alt="image" class="img-fluid" src="img/noimage.png"> </div> <div class="col-12 col-md-6 col-lg-6"> <h1>Design Blocks</h1> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus. </p> </div></div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn5").on("click", function () {
    $("#anexos").append(
      '<div class="container"> <div class="portlet-header"> <img src="img/move.png"> </div> <div class="eliminar_box">X</div> <div class="menu_link"> <img src="img/menu.png"> </div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"> <div class="row"> <section class="fdb-block"> <div class="container"> <div class="row text-center justify-content-center mt-5"> <div class="col-6 col-sm-3 col-xl-3 m-md-auto"> <img alt="image" class="fdb-icon" src="img/noimage.png""> <h3 class="my-3"><strong>Feature 1</strong></h3> <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> </div> <div class="col-6 col-sm-3 col-xl-3 m-auto pt-4 pt-sm-0"> <img alt="image" class="fdb-icon" src="img/noimage.png""> <h3 class="my-3"><strong>Feature 2</strong></h3> <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large ocean.</p> </div> <div class="col-6 col-sm-3 col-xl-3 m-auto pt-4 pt-sm-0"> <img alt="image" class="fdb-icon" src="img/noimage.png""> <h3 class="my-3"><strong>Feature 3</strong></h3> <p>A small river named Duden flows by their place and supplies it with the necessary regelialia</p> </div> <div class="col-6 col-sm-3 col-xl-3 m-auto pt-4 pt-sm-0"> <img alt="image" class="fdb-icon" src="img/noimage.png""> <h3 class="my-3"><strong>Feature 4</strong></h3> <p>A small river named Duden flows by their place and supplies it with the necessary regelialia</p> </div> </div> </div> </section> </div> </div> </div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn6").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row align-items-center py-5"><div class="col-12"> <img alt="image" class="img-fluid" src="img/noimage.png"> </div></div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn7").on("click", function () {
    $("#anexos").append(
      '<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' +
        contador +
        '" data-id-creator="' +
        contador +
        '"><div class="row justify-content-center pt-5"> <div class="col col-md-8 text-center"> Pegar código de Shopify </div> </div> </div></div>'
    );
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
          htmlRemoveTags: []
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
 $("#cn8").on("click", function () {
    $("#anexos").append('<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' + contador + '" data-id-creator="' + contador + '"> <div class="row py-5"> <div class="col py-5"> <div class="fdb-box fdb-touch"> <div class="row text-center justify-content-center"> <div class="col-12 col-md-9 col-lg-7"> <h1>Contact Us</h1> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus.</p> </div> </div> <div class="row justify-content-center pt-4"> <div class="col-12 col-md-8"> <form> <div class="row"> <div class="col-12 col-md"> <input id="nombre_form" type="text" class="form-control" placeholder="Prénom"> </div> <div class="col-12 col-md mt-4 mt-md-0"> <input id="apellido_form" type="text" class="form-control" placeholder="Nom"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="telefono_form" type="text" class="form-control" placeholder="Téléphone"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="email_form" type="email" class="form-control" placeholder="Email"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="direccion_form" type="text" class="form-control" placeholder="Rue"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="cp_form" type="input" class="form-control" placeholder="Code postal"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="ciudad_form" type="input" class="form-control" placeholder="Ville"> </div> </div> <div id="addtoform" class="mt-4"></div> <div class="row mt-4"> <div class="col"> <div class="form-check"> <input class="form-check-input" type="checkbox" value="1" id="polPri"> <label class="form-check-label" for="flexCheckDefault"> J&#39;accepte la <a href="#" data-bs-toggle="modal" data-bs-target="#privacidadModal">politique de confidentialité</a> </label> </div> </div> </div> <div class="row mt-4"> <div class="col text-center"> <button id="enviar_form" type="submit" class="btn btn-primary">Envoyer</button></div> </div> </form> </div> </div> </div> </div> </div> </div> </div>');
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
          htmlRemoveTags: [],
          htmlExecuteScripts: false
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $("#cn9").on("click", function () {
    $("#anexos").append('<div class="container"><div class="portlet-header"><img src="img/move.png"></div><div class="eliminar_box">X</div><div class="menu_link"><img src="img/menu.png"></div> <div id="edit' + contador + '" data-id-creator="' + contador + '"> <div class="row py-5"> <div class="col py-5"> <div class="fdb-box fdb-touch"> <div class="row text-center justify-content-center"> <div class="col-12 col-md-9 col-lg-7"> <h1>Contact Us</h1> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel efficitur leo. Aliquam in aliquam metus.</p> </div> </div> <div class="row justify-content-center pt-4"> <div class="col-12 col-md-8"> <form> <div class="row"> <div class="col-12 col-md"> <input id="nombre_form" type="text" class="form-control" placeholder="Prénom"> </div> <div class="col-12 col-md mt-4 mt-md-0"> <input id="apellido_form" type="text" class="form-control" placeholder="Nom"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="telefono_form" type="text" class="form-control" placeholder="Téléphone"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="email_form" type="email" class="form-control" placeholder="Email"> </div> </div>  <div class="row mt-4"> <div class="col"> <input id="direccion_form" type="text" class="form-control" placeholder="Rue"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="cp_form" type="input" class="form-control" placeholder="Code postal"> </div> </div> <div class="row mt-4"> <div class="col"> <input id="ciudad_form" type="input" class="form-control" placeholder="Ville"> </div> </div> <div id="addtoform" class="mt-4"></div> <div class="row mt-4"> <div class="col text-center"> <button id="enviar_form" type="submit" class="btn btn-primary">Envoyer</button></div> </div> </form> </div> </div> </div> </div> </div> </div> </div>');
    (function () {
      editor.push(
        new FroalaEditor("#edit" + contador, {
          toolbarButtons: [
            "bold",
            "italic",
            "underline",
            "insertLink",
            "insertImage",
            "html",
          ],
          imageInsertButtons: ["imageByURL"],
          htmlRemoveTags: [],
          htmlExecuteScripts: false
        })
      );
    })();
    $(function () {
      $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
      });

      $(".portlet")
        .addClass(
          "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
        )
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all")
        .prepend(
          "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>"
        );

      $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
      });
    });
    contador++;
  });
  $(document).on("click", ".eliminar_box", function () {
    // Make your changes here
    $(this).parent().remove();
  });
  $(document).on("click", "#addTitle", function () {
      $('#addtoform').append('<p>'+$('#titleOptions').val()+'</p>');
      $('#titleOptions').val('');
  });
  $(document).on("click", "#addOption", function () {
    if($('#newOption').val()===""){
      $('#newOption').addClass('border-danger');
    }else if($('#newValue').val()===""){
      $('#newValue').addClass('border-danger');
    }else{
      $('#addtoform').append('<div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="'+
        $('#newOption').val()+'" value="'+$('#newValue').val()+'">'+
        '<label class="form-check-label">'+$('#newValue').val()+'</label></div>');
      $('#newOption').val('');
      $('#newValue').val('');
      $('#newOption').removeClass('border-danger');
      $('#newValue').removeClass('border-danger');
    }
  });
  $(document).on("click", "#borrar_duplicados", function () {
    $(".shopify-buy-frame").empty();  
  });
  $(document).on("click", ".menu_link", function () {
    var $tempElement = $("<input>");
    $("body").append($tempElement);
    $tempElement.val("#" + $(this).next("div").attr("id")).select();
    document.execCommand("Copy");
    $tempElement.remove();
    $('#CopyLink').modal('show');
    setTimeout(function(){
      $('#CopyLink').modal('hide')
    }, 1000);
  });
  $("#ver_codigo").on("click", function () {
    editor.forEach(function callback(valor) {
      console.log(valor);
      valor.destroy();
    });
    $("#landing-codigo").val($("#code_html").html());
    $("#w0").submit();
  });
  setInterval(function () {
    $(this);
    $(".fr-wrapper").each(function () {
      $(this).find("a").eq(0).css({ background: "#fff", cursor: "default" });
      $(this).find("a").eq(0).attr("href", "#");
    });
  }, 100);
  $("#save_image").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "https://landingfy-creator.com/upload.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data) {
          $(".card_group").append(
            '<div class="col-sm-6"><div class="card"> <img src="' +
              data +
              '" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">' +
              data +
              "</h5> </div></div>"
          );
          $("#img_library").val("");
        }
      },
    });
  });
});
