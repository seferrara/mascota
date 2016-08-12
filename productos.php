<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Mascotas</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/76ff5bbde3.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/animate.css">

  <style>
    #productos {
      height:620px;
      background:url(http://everisgarden.com/wp-content/uploads/2014/01/Pasto-Natural.jpg);
      background-size:100%;
    }

    .contenedordetalles {
      width:50%;
      margin:auto;
      margin-top:70px;
    }

    .detalles {
      font-family:desyrel;
      font-weight:bold;
      color:white;
      font-size:20px;
      -webkit-transform: rotate(-90deg);
      transform: rotate(-4deg);
    }

    .cartel {
      background:url(img/cartelpatas.png);
      background-size:100%;
      height:320px;
      width:50%;
      margin-top:100px;
    }

    @media(max-width:767px){
      #productos {
        height:700px;
        background-size:400%;
      }

      .contproducto img {
        width:150px;
        margin-top:170px !important;
      }
      
      .contpro {
        margin-left:0px !important;
        margin-top:15px;
      }

      .contpro img {
        width:100px !important;
      }

      #presupuesto {
        height:1000px;
      }

      footer {
        height:650px;
      }
   }

   @media(min-width:768px){
      #productos {
        height:750px;
        background-size:150%;
      }

      .contproducto img {
        width:250px;
        margin-top:290px !important;
      }
      
      .contpro {
        margin-left:0px !important;
        margin-top:15px;
      }

      .contpro img {
        width:150px !important;
      }

      footer {
        height:500px;
      }
   }


  </style>

  <script>
    /*Funcion para animar los productos cuando pasas el mouse por encima*/

$(document).on('mouseenter', '#calesita', function(event) {
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
  </script>

  <script>
      var cant = 1;
      var art = 1;
      var id = 1;
      function agregarCampos() {

        /* Contamos la cantidad de selects y lo guardamos en una variable */

       var cantiselect = $("select").size();

       /* Segun la cantidad de selects ocultamos la opcion para agregar mas */

       if(cantiselect == 26) {
        $(".fa-plus").css("display", "none");
       }

        cant++
        art++
        id++
        $( ".cantidades" ).append('<div style="margin-top:30px" class="col-md-12"><div class="form-group"><input name="cant'+cant+'" type="text" class="form-control" placeholder="Cant."><select name="art'+art+'" id="select'+id+'" class="form-control"><option value="0">Seleccionar</option><option value="Tobogan">Tobogan</option><option value="Hamaca">Hamaca</option><option value="Calesita">Calesita</option></select><select  name="artnum1" id="artselect'+id+'"class="form-control"><option value="0">Seleccionar</option></select></div></div>');
      }
  </script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img style="width:100px;margin-top:-8px" src="img/logomascota.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      </ul>
    </div>
  </div>
</nav>


		<div id="productos">

			<br><br><br>

      <?php if(empty($_GET['producto'])) {
        //Si la variable PRODUCTO esta vacia muestra los tres productos
      ?>

      <h2>Haz click en cualquiera de nuestros productos</h2>

      <br><br>

			<a href="productos.php?producto=calesitas"><div id="calesita" style="margin-top:30px" class="col-xs-12 col-md-4">
				<img src="img/calesitas.png" alt="">
			</div></a>

			<a href="productos.php?producto=toboganes"><div id="tobogan" class="col-xs-12 col-md-4">
				<img src="img/toboganes.png" alt="">
			</div></a>

			<a href="productos.php?producto=hamacas"><div id="hamaca" class="col-xs-12 col-md-4">
				<img src="img/hamacas.png" alt="">
			</div></a>

      <?php } ?>

      <?php 

        //Si la variable PRODUCTO contiene algo ingresa al IF

        if(isset($_GET['producto'])) {

          //Si la variable PRODUCTO es igual a CALESITAS y la variable ART no contiene nada, se muestra el articulo default.

          if($_GET['producto'] == "calesitas" AND empty($_GET['art'])) { 
            ?>
            
            <br>
            <div class="col-xs-12 col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs hidden-sm">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: Calesita Eco</p>
                <p class="detalles">Materiales: Cinta PVC de varios colores</p>
                </div>
              </div>
             <img src="img/productos/calesitas/art115.png" alt="">
            </div>

             <div style="margin-top:30px" class="col-xs-12 col-md-12 col-md-offset-3">
               <a href="?producto=calesitas&art=115"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art115.jpg" alt=""></a>
               <a href="?producto=calesitas&art=126"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art126.jpg" alt=""></a>
               <a href="?producto=calesitas&art=127"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art127.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=hamacas"><img style="width:200px"src="img/hamacas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=toboganes"><img style="width:200px"src="img/toboganes.png" alt=""></a>
           </div>

        <?php  
          }

          //Si la variable PRODUCTO es igual a HAMACAS y la variable ART no contiene nada, se muestra el articulo default.

          if($_GET['producto'] == "hamacas" AND empty($_GET['art'])) { ?>

              <br>
            <div class="col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: Hamaca grande plegable</p>
                <p class="detalles">Materiales: Cinta PVC</p>
                </div>
              </div>
             <img style="margin-top:150px" src="img/productos/hamacas/art116.jpg" alt="">
            </div>

             <div style="margin-top:30px" class="col-md-12 col-md-offset-3">
               <a href="?producto=hamacas&art=116"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art116.jpg" alt=""></a>
               <a href="?producto=hamacas&art=117"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art117.jpg" alt=""></a>
               <a href="?producto=hamacas&art=128"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art128.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=calesitas"><img style="width:200px"src="img/calesitas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=toboganes"><img style="width:200px"src="img/toboganes.png" alt=""></a>
            </div>


          <?php

          }

          //Si la variable PRODUCTO es igual a TOBOGANES y la variable ART no contiene nada, se muestra el articulo default.

          if($_GET['producto'] == "toboganes" AND empty($_GET['art'])) { ?>

            <br>
            <div class="col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: Calesita Eco</p>
                <p class="detalles">Materiales: Cinta PVC de varios colores</p>
                </div>
              </div>
             <img style="margin-top:150px" src="img/productos/toboganes/art118.jpg" alt="">
            </div>

             <div style="margin-top:30px" class="col-md-12 col-md-offset-3">
               <a href="?producto=toboganes&art=118"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art118.jpg" alt=""></a>
               <a href="?producto=toboganes&art=119"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art119.jpg" alt=""></a>
               <a href="?producto=toboganes&art=120"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art120.jpg" alt=""></a>
               <a href="?producto=toboganes&art=121"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art121.jpg" alt=""></a>
               <a href="?producto=toboganes&art=122"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art122.jpg" alt=""></a>
               <a href="?producto=toboganes&art=123"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art123.jpg" alt=""></a>
               <a href="?producto=toboganes&art=124"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art124.jpg" alt=""></a>
               <a href="?producto=toboganes&art=131"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art131.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro ">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=hamacas"><img style="width:200px"src="img/hamacas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=calesitas"><img style="width:200px"src="img/calesitas.png" alt=""></a>
            </div>

          <?php

          }

        }

          //Si la variable ART contiene algo y la variable PRODUCTO es igual a CALESITAS ingresa al IF.

          if(isset($_GET['art']) AND $_GET['producto'] == "calesitas") {

            //Segun el valor que tenga la variable ART cambian los datos del array para luego mostrarlos en pantalla.

            if($_GET['art'] == "115") {
               $arti = array("115", "Calesita Eco", "Cinta PVC de varios colores", "img/productos/calesitas/art115.jpg");
            }
            elseif($_GET['art'] == "126") {
               $arti = array("126", "Calesita de una entrada", "Cinta PVC", "img/productos/calesitas/art126.jpg");
            }
            else {
               $arti = array("127", "Calesita de una entrada", "Listones de plastico", "img/productos/calesitas/art127.jpg");
            }
      
           ?>

              <br>
            <div class="col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: <?php echo $arti[1]; ?></p>
                <p class="detalles">Materiales: <?php echo $arti[2]; ?></p>
                </div>
              </div>
             <img style="margin-top:150px" src="<?php echo $arti[3]; ?>" alt="">
            </div>

             <div style="margin-top:30px" class="col-md-12 col-md-offset-3">
               <a href="?producto=calesitas&art=115"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art115.jpg" alt=""></a>
               <a href="?producto=calesitas&art=126"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art126.jpg" alt=""></a>
               <a href="?producto=calesitas&art=127"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/calesitas/btn_art127.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=hamacas"><img style="width:200px"src="img/hamacas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=toboganes"><img style="width:200px"src="img/toboganes.png" alt=""></a>
            </div>
              
              <?php
        }

        //Si la variable ART contiene algo y la variable PRODUCTO es igual a CALESITAS ingresa al IF.

        if(isset($_GET['art']) AND $_GET['producto'] == "hamacas") {

          //Segun el valor que tenga la variable ART cambian los datos del array para luego mostrarlos en pantalla.
            
             if($_GET['art'] == "116") {
               $arti = array("116", "Hamaca grande plegable", "Cintas de PVC", "img/productos/hamacas/art116.jpg");
            }
            elseif($_GET['art'] == "117") {
               $arti = array("117", "Hamaca de asiento fijo", "Cintas de PVC varios colores", "img/productos/hamacas/art117.jpg");
            }
            else {
               $arti = array("128", "Hamaca de asiento fijo", "Distintos plasticos", "img/productos/hamacas/art128.jpg");
            }
      
           ?>

              <br>
            <div class="col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: <?php echo $arti[1]; ?></p>
                <p class="detalles">Materiales: <?php echo $arti[2] ?></p>
                </div>
              </div>
             <img style="margin-top:150px" src="<?php echo $arti[3]; ?>" alt="">
            </div>

             <div style="margin-top:30px" class="col-md-12 col-md-offset-3">
               <a href="?producto=hamacas&art=116"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art116.jpg" alt=""></a>
               <a href="?producto=hamacas&art=117"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art117.jpg" alt=""></a>
               <a href="?producto=hamacas&art=128"><img style="border:3px solid #26A65B;border-radius:50px" src="img/productos/hamacas/btn_art128.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=calesitas"><img style="width:200px"src="img/calesitas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=toboganes"><img style="width:200px"src="img/toboganes.png" alt=""></a>
            </div>


        <?php

        }

        //Si la variable ART contiene algo y la variable PRODUCTO es igual a CALESITAS ingresa al IF.

         if(isset($_GET['art']) AND $_GET['producto'] == "toboganes") {

           //Segun el valor que tenga la variable ART cambian los datos del array para luego mostrarlos en pantalla.

          switch ($_GET['art']) {

            case "118":
              $arti = array("118", "Tobogan Eco Nº2", "Escalones varios colores", "1,30 x 2,10 m.", "img/productos/toboganes/art118.jpg");
            break;

            case "119":
              $arti = array("119", "Tobogan Eco Nº2", "Escalones varios colores", "1,50 x 2,40 m.", "img/productos/toboganes/art119.jpg");
            break;

            case "120":
              $arti = array("120", "Tobogan Super Nº1", "3 escalones plasticos", "0,90 x 1,50 m.", "img/productos/toboganes/art120.jpg");
            break;

            case "121":
              $arti = array("121", "Tobogan Super Nº2", "3 escalones plasticos", "1,10 x 1,80 m.", "img/productos/toboganes/art121.jpg");
            break;

            case "122":
              $arti = array("122", "Tobogan Super Nº3", "4 escalones plasticos", "1,30 x 2,20 m.", "img/productos/toboganes/art122.jpg");
            break;

            case "123":
              $arti = array("123", "Tobogan Onda Nº4", "5 escalones plasticos", "1,50 x 2,40 m.", "img/productos/toboganes/art123.jpg");
            break;

            case "124":
              $arti = array("124", "Tobogan Super Nº4", "5 escalones plasticos", "1,50 x 2,40 m.", "img/productos/toboganes/art124.jpg");
            break;

            case "131":
              $arti = array("131", "Tobogan Onda Nº3", "4 escalones plasticos", "1,20 x 1,90 m.", "img/productos/toboganes/art131.jpg");
            break;
          }

          ?>

            <br>
            <div class="col-md-8">
            <div class="col-md-12 contproducto">
              <div class="col-md-4 cartel hidden-xs">
                <div class="contenedordetalles">
                <p class="detalles">Nombre: <?php echo $arti[1]; ?></p>
                <p class="detalles">Detalles: <?php echo $arti[2]; ?></p>
                <p class="detalles">Medidas: <?php echo $arti[3]; ?></p>
                </div>
              </div>
             <img style="margin-top:150px" src="<?php echo $arti[4]; ?>" alt="">
            </div>

             <div style="margin-top:30px" class="col-md-12 col-md-offset-3">
               <a href="?producto=toboganes&art=118"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art118.jpg" alt=""></a>
               <a href="?producto=toboganes&art=119"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art119.jpg" alt=""></a>
               <a href="?producto=toboganes&art=120"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art120.jpg" alt=""></a>
               <a href="?producto=toboganes&art=121"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art121.jpg" alt=""></a>
               <a href="?producto=toboganes&art=122"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art122.jpg" alt=""></a>
               <a href="?producto=toboganes&art=123"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art123.jpg" alt=""></a>
               <a href="?producto=toboganes&art=124"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art124.jpg" alt=""></a>
               <a href="?producto=toboganes&art=131"><img style="border:3px solid #26A65B" src="img/productos/toboganes/btn_art131.jpg" alt=""></a>
             </div>
           </div>

           <div style="margin-left:-50px" class="col-xs-12 col-md-4 contpro">
            <div class="col-xs-6 col-md-12">
              <a href="?producto=calesitas"><img style="width:200px"src="img/calesitas.png" alt=""></a>
            </div>
            <div class="col-xs-6 col-md-12"></div>
              <a href="?producto=hamacas"><img style="width:200px"src="img/hamacas.png" alt=""></a>
            </div>

         <?php

         }

        ?>
		</div>

		<div id="presupuesto">
      <br>
      <h2>Si desea realizar su presupuesto porfavor dejenos sus datos.</h2>
      <h3>*Solo venta a mayoristas</h3><br>

      <i style="color:#446CB3" class="fa fa-info-circle fa-2x" aria-hidden="true"></i> <p style="font-weight:bold">Introducir la cantidad, seleccionar el producto y luego el numero de articulo.</p>
      <p style="font-weight:bold">Si desea agregar otro campo clickear en el boton <i style="color:#26A65B" class="fa fa-plus" aria-hidden="true"></i></p>

      <br><br>

      <form action="enviarpresupuesto.php" method="post" class="form-inline">
        
        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="mail" placeholder="Email">
        </div>

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="telefono" placeholder="Telefono">
        </div>

        <div style="margin-top:30px" class="col-md-12">
        <div class="form-group">
          <input id="probando" name="cant1" type="text" class="form-control" placeholder="Cant.">
          <select name="art1" id="select1" class="form-control">
              <option value="0">Seleccionar</option>
              <option value="Tobogan">Tobogan</option>
              <option value="Hamaca">Hamaca</option>
              <option value="Calesita">Calesita</option>
          </select>
          <select  name="artnum1" id="artselect1" class="form-control">
              <option value="0">Seleccionar</option>
          </select>
        </div>
        </div>

        <div class="cantidades col-md-12"></div>

        <br>

        <i onclick="agregarCampos()" style="margin-top:20px;cursor:pointer;color:#26A65B" class="fa fa-plus fa-2x" aria-hidden="true"></i>

        <div style="margin-top:30px" class="col-md-12">
          <textarea class="form-control" name="mensaje" cols="100" rows="5" placeholder="Consultas/Comentarios"></textarea>
        </div>

        <div style="margin-top:20px" class="col-md-12">
        <input type="submit" class="btn btn-primary" value="Enviar">
        </div>

      </form>
    </div>

      </form>
		</div>

		
    <footer>
      <a id="contacto"></a>

      <div class="container">

        <div class="col-md-4">
      <i style="margin-top:30px;color:#F62459" class="fa fa-phone-square fa-2x" aria-hidden="true"></i> <p> 4484 - 1175</p> 
      <i style="color:#22A7F0" class="fa fa-envelope fa-2x" aria-hidden="true"></i> <p>info@mascotarodados.com.ar</p>
        </div>

        <div class="col-md-8">

      <form style="margin-top:30px" action="enviarcontacto.php" method="post" class="form-inline">

        <div class="row">

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="apellido" placeholder="Apellido">
        </div>

        </div>

        <div style="margin-top:20px" class="row">

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="mail" placeholder="Email">
        </div>

        <div class="form-group" style="margin-left:15px">
          <input type="text" class="form-control" name="telefono" placeholder="Telefono">
        </div>

        </div>

        <div style="margin-top:20px" class="row">
          <textarea class="form-control" name="mensaje" id="" cols="60" rows="5" placeholder="Consultas/Comentarios"></textarea>
        </div>

        <div style="margin-top:20px" class="row">
          <input type="submit" class="btn btn-danger" value="Enviar">
        </div>

      </form>

      </div>

      </div>
    </footer>

    <script>

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
    });

   </script>

	
</body>
</html>