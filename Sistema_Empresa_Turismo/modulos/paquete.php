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
      
      Administrar paquete
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar paquete</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPaquete">
          
          Agregar paquete

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Actividades</th>
           <th>Transporte</th>
           <th>Horario</th>
           <th>Costo</th>
           <th>Usuario</th>
           <th>Hotel</th>
           
         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $paquete = ControladorPaquete::ctrMostrarPaquete($item, $valor);

       foreach ($paquete as $key => $value){

        // if($_SESSION["id"] == $value["cod_paquetes"]){
         
          echo ' <tr>

                  <td>'.($key+1).'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarPaquete" cod_paquetes="'.$value["cod_paquetes"].'" data-toggle="modal" data-target="#modalEditarPaquete"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                            echo '<button class="btn btn-danger btnEliminarPaquete" cod_paquetes="'.$value["cod_paquetes"].'"><i class="fa fa-times"></i></button>';

                          }

                    echo '</div>  

                  </td>

                  <td>'.$value["nombreP"].'</td>
                  <td>'.$value["actividadesP"].'</td>
                  <td>'.$value["transporte"].'</td>
                  <td>'.$value["horario_de_atencionP"].'</td>
                  <td>'.$value["precioP"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["cod_agente"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                   echo '<td>'.$respuestaUsuario["nombre"].'</td>';

                   $itemHotel = "idhotel";
                   $valorHotel = $value["cod_hotel"];

                    $respuestaHotel = ControladorHotel::ctrMostrarHotel($itemHotel, $valorHotel);

                    echo '<td>'.$respuestaHotel["nombreH"].'</td>
                   
                </tr>';
        
              }
          // }

        ?> 

        </tbody>

        <tfoot> 

          <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Actividades</th>
           <th>Transporte</th>
           <th>Horario</th>
           <th>Costo</th>
           <th>Usuario</th>
           <th>Hotel</th>
           
         </tr>

        </tfoot>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PAQUETE
======================================-->

<div id="modalAgregarPaquete" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar paquete</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoPaquete" placeholder="Ingresar el nombre del paquete" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL ACTIVIDADES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoActividades" placeholder="Ingresar las actividades" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TRANSPORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTransporte" placeholder="Ingresar el transporte" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL HORARIO DE ATENCION -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="time" class="form-control input-lg" name="nuevoHorario" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio" placeholder="Ingresar el costo total" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL USUARIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="nuevoUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR HOTEL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <select class="form-control input-lg" id="nuevoHotel" name="nuevoHotel" required>
                  
                  <option value="">Selecionar hotel</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $hotel = ControladorHotel::ctrMostrarHotel($item, $valor);

                  foreach ($hotel as $key => $value) {
                    
                    echo '<option value="'.$value["idhotel"].'">'.$value["nombreH"].'</option>';
                  }

                  ?>
  
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

          <button type="submit" class="btn btn-primary">Guardar paquete</button>

        </div>

        <?php

          $crearPaquete = new ControladorPaquete();
          $crearPaquete -> ctrCrearPaquete();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PAQUETE
======================================-->

<div id="modalEditarPaquete" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar paquete</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" id="cod_paquetes" name="cod_paquetes">
              
                <span class="input-group-addon"> NOMBRE DEL PAQUETE</span> 

                <input type="text" class="form-control input-lg" id="editarPaquete" name="editarPaquete" required>

              </div>

            </div>

            <!-- ENTRADA PARA LAS ACTIVIDADES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">ACTIVIDADES</span> 

                <input type="text" class="form-control input-lg"id="editarActividades" name="editarActividades" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TRANSPORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">TRANSPORTE</span> 

                <input type="text" class="form-control input-lg" id="editarTransporte" name="editarTransporte" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL HORARIO DE ATENCION -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">HORARIO</span> 

                <input type="time" class="form-control input-lg" id="editarHorario" name="editarHorario" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">COSTO</span> 

                <input type="number" class="form-control input-lg" id="editarPrecio" name="editarPrecio" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" class="form-control" id="editarUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="editarUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR HOTEL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">HOTEL</span>

                <select class="form-control input-lg"  name="editarHotel" readonly required>
                  
                  <option id="editarHotel"></option>

                </select>

              </div>

              <small style="color: red;">El campo no se debe editar por recomendación del sistema</small>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar paquete</button>

        </div>

        <?php

          $editarPaquete = new ControladorPaquete();
          $editarPaquete -> ctrEditarPaquete();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarPaquete = new ControladorPaquete();
  $borrarPaquete -> ctrBorrarPaquete();

?>


