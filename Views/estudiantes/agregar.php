<div class="box-principal">
  <h3 class="titulo">Agregar Estudiantes</h3>
  <div class="panel panel-succes">
    <div class="panel-heading">
      <h3 class="panel-title">Agregar un nuevo estudiante</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Nombre del estudiante</label>
              <input class="form-control" type="text" name="nombre" required="true">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Edad</label>
              <input class="form-control" type="text" name="edad" required="true">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Promedio</label>
              <input class="form-control" type="text" name="promedio" required="true">
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Seccion</label>
              <select class="form-control" name="id_seccion">
                <?php while ($row = mysqli_fetch_array($datos)) {
                  ?>
                  <option value="<?php echo $row['id'] ?>"> <?php echo $row["nombre"]; ?> </option>
                  <?php
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Imagen</label>
              <input type="file" name="imagen" required="true" id="imagen">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-succes">Registrar</button>
              <button type="reset" class"btn btn-warning">Borrar</button>
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
