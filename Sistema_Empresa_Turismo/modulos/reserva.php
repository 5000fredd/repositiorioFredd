<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar reserva
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar reserva</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarReserva">
          
          Agregar reserva

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Fecha Reserva</th>
           <th>Fecha Inicio</th>
           <th>Fecha Fin</th>
           <th>Usuario</th>
           <th>Paquete</th>
           
         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $reserva = ControladorReserva::ctrMostrarReserva($item, $valor);

       foreach ($reserva as $key => $value){
         
          echo ' <tr>

                  <td>'.($key+1).'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarReserva" cod_reserva="'.$value["cod_reserva"].'" data-toggle="modal" data-target="#modalEditarReserva"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                            echo '<button class="btn btn-danger btnEliminarReserva" cod_reserva="'.$value["cod_reserva"].'"><i class="fa fa-times"></i></button>';

                          }

                    echo '</div>  

                  </td>

                  <td>'.$value["fecha_de_reservaR"].'</td>
                  <td>'.$value["fechaInicio"].'</td>
                  <td>'.$value["fechaFin"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["cod_usuario"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                   echo '<td>'.$respuestaUsuario["nombre"].'</td>';

                   $itemPaquete = "cod_paquetes";
                   $valorPaquete = $value["idpaquetes"];

                    $respuestaPaquete = ControladorPaquete::ctrMostrarPaquete($itemPaquete, $valorPaquete);

                    echo '<td>'.$respuestaPaquete["nombreP"].'</td>
                   
                </tr>';
        
              }
          // }

        ?> 

        </tbody>

        <tfoot> 

          <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Fecha Reserva</th>
           <th>Fecha Inicio</th>
           <th>Fecha Fin</th>
           <th>Usuario</th>
           <th>Paquete</th>
           
         </tr>

        </tfoot>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR RESERVA
======================================-->

<div id="modalAgregarReserva" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar reserva</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">FECHA DE INICIO</span> 

                <input type="date" class="form-control input-lg" name="nuevoInicio" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE FIN-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">FECHA FIN</span> 

                <input type="date" class="form-control input-lg" name="nuevoFin" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL USUARIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">USUARIO</span> 

                <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="nuevoUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR PAQUETE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">PAQUETE</span>

                <select class="form-control input-lg" id="nuevoPaquete" name="nuevoPaquete" required>
                  
                  <option value="">Selecionar paquete</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $paquete = ControladorPaquete::ctrMostrarPaquete($item, $valor);

                  foreach ($paquete as $key => $value) {
                    
                    echo '<option value="'.$value["cod_paquetes"].'">'.$value["nombreP"].'</option>';
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

          <button type="submit" class="btn btn-primary">Guardar reserva</button>

        </div>

        <?php

          $crearReserva = new ControladorReserva();
          $crearReserva -> ctrCrearReserva();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR RESERVA
======================================-->

<div id="modalEditarReserva" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar reserva</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            
            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" id="cod_reserva" name="cod_reserva">
              
                <span class="input-group-addon"> FECHA DE INICIO</span> 

                <input type="date" class="form-control input-lg" id="editarInicio" name="editarInicio" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE FIN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">FECHA FIN</span> 

                <input type="date" class="form-control input-lg" id="editarFin" name="editarFin" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" class="form-control" id="editarUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="editarUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR PAQUETE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">PAQUETE</span>

                <select class="form-control input-lg" name="editarPaquete" readonly required>
                  
                  <option id="editarPaquete"></option>

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

          <button type="submit" class="btn btn-primary">Modificar reserva</button>

        </div>

        <?php

          $editarReserva = new ControladorReserva();
          $editarReserva -> ctrEditarReserva();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarReserva = new ControladorReserva();
  $borrarReserva -> ctrBorrarReserva();

?>


