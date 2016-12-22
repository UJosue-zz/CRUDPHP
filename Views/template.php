<?php namespace Views;

  $template = new Template();
  class Template
  {

    function __construct()
    {
      ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Administración de estudiantes | Kémik</title>
          <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
          <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
        </head>
        <body>
          <nav class="navbar  navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-nav">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="http://localhost/CursoPHP/Clases/Proyecto/" class="navbar-brand">Administración de Estudiantes</a>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo URL; ?>">Inicio</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
                      <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
                      <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
                    </ul>
                  </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="http://kemik.gt/">Kémik</a></li>
                </ul>
              </div>
            </div>
          </nav>

      <?php
    }

    function __destruct(){
?>
      <footer class="navbar-fixed-bottom">
        Todos los derechos reservados &copy 2016 <br>
        UJosue - @UJosue10 | <b>Kémik</b>
      </footer>
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
      </body>
      </html>
      <?php
    }
  }

 ?>
