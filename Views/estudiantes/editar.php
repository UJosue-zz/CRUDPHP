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
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Nombre del estudiante</label>
              <input class="form-control" type="text" name="nombre" required="true" value="<?php echo $datos["nombre"] ?>">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Edad</label>
              <input class="form-control" type="text" name="edad" required="true" value="<?php echo $datos["edad"] ?>">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Promedio</label>
              <input class="form-control" type="text" name="promedio" required="true" value="<?php echo $datos["promedio"] ?>">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Seccion: <?php echo $datos["nombre_seccion"] ?></label>
              <select class="form-control" name="id_seccion">
                <?php while ($row = mysqli_fetch_array($secciones)) {
                  ?>
                  <option value="<?php echo $row['id'] ?>"> <?php echo $row["nombre"]; ?> </option>
                  <?php
                } ?>
              </select>
            </div>
            <input type="hidden" name="id" required="true" value="<?php echo $datos["id"] ?>">
            <div class="form-group">
              <button type="submit" class="btn btn-succes">Editar</button>
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
