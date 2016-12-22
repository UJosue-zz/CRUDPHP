<div class="box-principal">
  <h3 class="titulo">Editar sección <?php echo $datos["nombre"]; ?></h3>
  <div class="panel panel-succes">
    <div class="panel-heading">
      <h3 class="panel-title">Editar sección <?php echo $datos["nombre"]; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-10">
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="contol-label">Nombre de la sección</label>
              <input class="form-control" type="text" name="nombre" required="true" value="<?php echo $datos["nombre"] ?>">
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
