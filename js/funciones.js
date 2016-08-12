/*Funcion para desplazar con estilo*/

$(document).on('click', '.desp', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

/*Funcion para hacer aparecer la navbar luego de determinados PX*/

		$(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 700) {
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
  
    });

/*Funcion para animar los productos cuando pasas el mouse por ensima*/

$(document).on('mouseenter', '#calesita', function(event) {
     $(this).removeClass("wow bounceInLeft")
	 $(this).addClass("animated swing");
});

$(document).on('mouseleave', '#calesita', function(event) {
	$(this).removeClass("animated swing");
});

$(document).on('mouseenter', '#hamaca', function(event) {
	 $(this).addClass("animated bounce");
});

$(document).on('mouseleave', '#hamaca', function(event) {
	$(this).removeClass("animated bounce");
});

$(document).on('mouseenter', '#tobogan', function(event) {
	 $(this).addClass("animated tada");
});

$(document).on('mouseleave', '#tobogan', function(event) {
	$(this).removeClass("animated tada");
});

$(document).on('click', '.fa-plus', function(){

        $("#presupuesto").css("height","+=70px");

      });

    var toboganes = ["118","119", "120", "121", "122", "123", "124", "131"];
    var hamacas = ["116", "117", "128"];
    var calesitas = ["115", "126", "127"];

   $(document).on('change', 'select', function(){

      var idart = $(this).attr("id");

      var defi = "#art"+idart;

/*Borra los option de articulos al seleccionar un producto*/

      $(defi)
    .find('option')
    .remove()
    ;

/*Si el valor corresponde a X producto agrega los datos del array al select de articulo*/
  
      if(this.value == "Tobogan") {
        $.each(toboganes, function (i, item) {
          $(defi).append($('<option>', { 
              value: item,
              text : item
          }));
        });
      }

      if(this.value == "Hamaca") {
       $.each(hamacas, function (i, item) {
          $(defi).append($('<option>', { 
              value: item,
              text : item
          }));
        });
      }

      if(this.value == "Calesita") {
        $.each(calesitas, function (i, item) {
          $(defi).append($('<option>', { 
              value: item,
              text : item
          }));
        });
      }

      $(document).on('change', defi, function(){
            $(defi).parent().addClass( "has-success");
        });


    });



