<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="box-principal">
  <h3 class="titulo">Editar estudiante <?php echo $datos["nombre"]; ?></h3>
  <div class="panel panel-succes">
    <div class="panel-heading">
      <h3 class="panel-title">Editar estudiante <?php echo $datos["nombre"]; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <div class="panel-body">
            <img src="<?php echo URL;?>Views/template/imagenes/avatars/<?php echo $datos["imagen"] ?>" alt="">
          </div>
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b> <?php echo $datos["nombre"]; ?>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item">
              <b>Edad: </b> <?php echo $datos["edad"]; ?>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item">
              <b>Promedio: </b> <?php echo $datos["promedio"]; ?>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item">
              <b>Sección: </b> <?php echo $datos["nombre_seccion"]; ?>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item">
              <b>Fecha de Registro: </b> <?php echo $datos["fecha"]; ?>
            </li>
          </ul>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
