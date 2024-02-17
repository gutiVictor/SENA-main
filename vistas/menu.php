
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    body {
       position: relative;
    }

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('../img/ffenix.png'); /* ruta  imagen de fondo */
      background-size: 100% 95%;
      background-repeat: no-repeat;
      opacity: 0.2; /* Ajusta la opacidad según tus preferencias (0.0 - 1.0) */
      z-index: -1;
     
    
    }
  </style>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php"><img  class="img-responsive logo img-thumbnail" src="../img/ffenix.png" alt="" width="100px" height="100px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>

            
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Administrar Articulos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorias</a></li>
              <li><a href="articulos.php">Articulos</a></li>
            </ul>
          </li>


        <?php
        if($_SESSION['usuario']=="admin"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
         <?php 
       endif;
          ?>


           <li><a href="clientes.php"><span class="glyphicon glyphicon-user"></span> Clientes</a>
          </li>
          <li><a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> Vender Articulo</a>
          </li>
          
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
    
    </div>
   
  </div>
</div>






      


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>