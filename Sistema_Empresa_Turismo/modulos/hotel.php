<?php

if($_SESSION["perfil"] == "Agente"){

  echo '<script>

    window.location = "404";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar hotel
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar hotel</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarHotel">
          
          Agregar hotel

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Servicio</th>
           <th>Tipo</th>
           <th>Ubicación</th>
           <th>tipo de Habitación</th>
           
         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $hotel = ControladorHotel::ctrMostrarHotel($item, $valor);

       foreach ($hotel as $key => $value){
         
          echo ' <tr>

                  <td>'.($key+1).'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarHotel" idhotel="'.$value["idhotel"].'" data-toggle="modal" data-target="#modalEditarHotel"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                            echo '<button class="btn btn-danger btnEliminarHotel" idhotel="'.$value["idhotel"].'"><i class="fa fa-times"></i></button>';

                          }

                    echo '</div>  

                  </td>

                  <td>'.$value["nombreH"].'</td>
                  <td>'.$value["servicioH"].'</td>
                  <td>'.$value["tipoH"].'</td>
                  <td>'.$value["ubicacionH"].'</td>
                  <td>'.$value["tipo_de_habitacionH"].'</td>

                </tr>';
        }

        ?> 

        </tbody>

        <tfoot> 

          <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Servicio</th>
           <th>Tipo</th>
           <th>Ubicación</th>
           <th>tipo de Habitación</th>
           
         </tr>

        </tfoot>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR HOTEL
======================================-->

<div id="modalAgregarHotel" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar hotel</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoHotel" placeholder="Ingresar el nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL SERVICIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoServicio" placeholder="Ingresar el servicio" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TIPO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTipo" placeholder="Ingresar el tipo" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA UBICACIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUbicacion" placeholder="Ingresar la ubicación" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TIPO DE HABITACIÓN -->

             <!-- <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoHabitacion" placeholder="Ingresar el tipo de habitación" required>

              </div>

            </div> -->

            <!-- ENTRADA PARA EL TIPO DE HABITACION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <select class="form-control input-lg" name="nuevoHabitacion">
                  
                  <option value="">Seleccionar Habitación</option>

                  <option value="Individual">Individual</option>

                  <option value="Familiar">Familiar</option>

                  <option value="Matrimonial">Matrimonial</option>

                </select>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar hotel</button>

        </div>

        <?php

          $crearHotel = new ControladorHotel();
          $crearHotel -> ctrCrearHotel();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR HOTEL
======================================-->

<div id="modalEditarHotel" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar hotel</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">

              	<input type="hidden" id="idhotel" name="idhotel">
              
                <span class="input-group-addon"> NOMBRE</span> 

                <input type="text" class="form-control input-lg" id="editarHotel" name="editarHotel" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL SERVICIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> SERVICIO</span> 

                <input type="text" class="form-control input-lg" id="editarServicio" name="editarServicio" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TIPO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> TIPO</span> 

                <input type="text" class="form-control input-lg" id="editarTipo" name="editarTipo" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA UBICACIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> UBICACIÓN</span> 

                <input type="text" class="form-control input-lg" id="editarUbicacion" name="editarUbicacion" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TIPO DE HABITACIÓN -->
            
            <!-- <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> TIPO HABITACIÓN</span> 

                <input type="text" class="form-control input-lg" id="editarHabitacion" name="editarHabitacion" required>

              </div>

            </div> -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">TIPO DE HABITACIÓN</span> 

                <select class="form-control input-lg" name="editarHabitacion">
                  
                  <option value="" id="editarHabitacion"></option>

                  <option value="Individual">Individual</option>

                  <option value="Familiar">Familiar</option>

                  <option value="Matrimonial">Matrimonial</option>

                </select>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar hotel</button>

        </div>

        <?php

          $editarHotel = new ControladorHotel();
          $editarHotel -> ctrEditarHotel();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarHotel = new ControladorHotel();
  $borrarHotel -> ctrBorrarHotel();

?>



