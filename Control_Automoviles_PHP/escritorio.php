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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="banner.css">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <video autoplay loop muted plays-inline class="back-video">
                      <source src="video.mp4" type="video/mp4">
                    </video>
                     
                    <div class="box-header with-border">
                          <h1 class="box-title">Escritorio</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div> 
                    <!-- /.box-header -->
                    <!-- centro -->
                       
                        <div class="container__cards">
                          
                          <div class="card1">
                            <div class="cover__card">
                              <img src="../reportes/go1.jpg">
                            </div>  
                          </div>
                          <div class="card">
                            <br><br>
                                <h1 class="t1"> Bienvenido a App-Men un sistema de identificación vehicular </h1>
                          </div>   
                        </div>
                          
                    <div class="panel-body table-responsive" id="listadoregistros">
                    
                        <table id="tbllistado1" class="table table-striped table-bordered table-condensed table-hover">

                          <thead class="li">
                            
                            <th>Chasis</th> 
                            <th>Procedencia</th>
                            <th>Marca</th>
                            <th>Año de Fabricación</th>
                            <th>Imagen Chasis</th>
                            <th>Imagen Vehículo</th>
                            <th>Imagen Motor</th>
                            <th>Imagen Plaqueta</th>
                          </thead>
                          <tbody>    

                          </tbody>
                          <tfoot class="li">
                          
                            <th>Chasis</th>
                            <th>Procedencia</th>
                            <th>Marca</th>
                            <th>Año de Fabricación</th>
                            <th>Imagen Chasis</th>
                            <th>Imagen Vehículo</th>
                            <th>Imagen Motor</th>
                            <th>Imagen Plaqueta</th>
                          </tfoot>
                        </table>
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
