<?php
//activamos el alamcenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
if ($_SESSION['automoviles']==1)
{

?>
<!--Contenido-->
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Vehículos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>  Agregar</button> <a target="_blank" href="../reportes/rptauto.php"><button class="btn btn-info" id="btnre"> <i class="fa fa-clipboard"></i> Reporte</button></a> </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Clase Vehículo</th>
                            <th>Procedencia</th>
                            <th>Chasis</th>
                            <th>Marca Vehículo</th>
                            <th>Imagen Chasis</th>
                            <th>Imagen Vehículo</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Clase Vehículo</th>
                            <th>Procedencia</th>
                            <th>Chasis</th>
                            <th>Marca Vehículo</th>
                            <th>Imagen Chasis</th>
                            <th>Imagen Vehículo</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div>
                      
                    </div>
                   <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Clase Vehículo(*):</label>
                            <input type="hidden" name="idautomoviles" id="idautomoviles">
                            <input type="text" class="form-control" name="clase" id="clase" maxlength="150" placeholder="Vehículo" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Procedencia(*):</label>
                            <select id="idcategoria" name="idcategoria" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <label>Año(*):</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Año" required>
                          </div>
                          <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <label>Marca Vehículo(*):</label>
                            <input type="text" class="form-control" name="marca" id="marca" maxlength="100" placeholder="Marca" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Número Chasis:</label>
                            <input type="text" class="form-control" name="chasis" id="chasis" maxlength="150" placeholder="Chasis">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo Vehículo:</label>
                            <input type="text" class="form-control" name="tipo" id="tipo" maxlength="100" placeholder="Tipo">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ubicación:</label>
                            <input type="text" class="form-control" name="ubicacion" id="ubicacion" maxlength="100" placeholder="Ubicacion">
                          </div>
                                         
                         
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen Motor:</label>
                            <input type="file" class="form-control" name="motorI" id="motorI">
                            <input type="hidden" name="imagenactual0" id="imagenactual0">
                            <img src="" width="400px" height="200px" id="imagenmuestra0">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen Plaqueta:</label>
                            <input type="file" class="form-control" name="plaquetaI" id="plaquetaI">
                            <input type="hidden" name="imagenactual1" id="imagenactual1">
                            <img src="" width="400px" height="200px" id="imagenmuestra1">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen chasis:</label>
                            <input type="file" class="form-control" name="chasisI" id="chasisI">
                            <input type="hidden" name="imagenactual2" id="imagenactual2">
                            <img src="" width="400px" height="200px" id="imagenmuestra2">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen Auto:</label>
                            <input type="file" class="form-control" name="autoI" id="autoI">
                            <input type="hidden" name="imagenactual3" id="imagenactual3">
                            <img src="" width="400px" height="200px" id="imagenmuestra3">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>

                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php
}
else
{
  require 'noacceso.php';
}
require 'footer.php';
?>
<script type="text/javascript" src="scripts/automoviles.js"></script>

<?php
}
ob_end_flush(); 
 ?>
