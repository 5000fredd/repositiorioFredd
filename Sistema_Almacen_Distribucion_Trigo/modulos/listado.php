<?php

if($_SESSION["perfil"] == "Empleado"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
     Listado de Actas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Actas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <!--=====================================
        BOTON PARA EL REPORTE DE RANGO DE FECHAS
        ======================================-->

        <a href="reportes/index.php" target="_blank">
        <button class="btn" style="background-color:#2E86C1 "><i class="fa fa-table" style="color:#FFFFFF "></i><b style="color:#FFFFFF "> Excel Fecha</b></button>
        </a> 

        <!--=====================================
        BOTON PARA EL REPORTE DE RANGO DE FECHAS Y EL DESTINO
        ======================================-->

        <a href="reportes/index2.php" target="_blank">
        <button class="btn" style="background-color:#17A589 "><i class="fa fa-table" style="color:#FFFFFF "></i><b style="color:#FFFFFF "> Excel Fecha y Destino</b></button>
        </a>

        <!--=====================================
        BOTON PARA EL REPORTE DEL DESTINO
        ======================================-->

        <a href="reportes/index3.php" target="_blank">
        <button class="btn" style="background-color:#E74C3C"><i class="fa fa-table" style="color:#FFFFFF "></i><b style="color:#FFFFFF "> Excel Destino</b></button>
        </a>

        <!--=====================================
        BOTON PARA EL REPORTE POR FACTURA
        ======================================-->

        <a href="reportes/index4.php" target="_blank">
        <button class="btn" style="background-color:#2E4053 "><i class="fa fa-table" style="color:#FFFFFF "></i><b style="color:#FFFFFF "> Excel Factura</b></button>
        </a>

        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
          
            <span>

              <i class="fa fa-calendar"></i> Rango de fecha
              
            </span>

              <i class="fa fa-caret-down"></i>

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th style="width:180px">Acciones</th>
           <th>Ciudad</th>
           <th>Usuario</th>
           <th>Destino</th>
           <th>Vehiculo</th>
           <th>Placa</th>
           <th>Conductor</th>
           <th>Ci</th>
           <th>Ingreso</th>
           <th>Procedencia</th>
           <th>Porte</th>
           <th>Dim</th>
           <th>Proveedor</th>
           <th>Salida</th>
           <th>Precinto</th>
           <th>Factura</th>
           <th>Certificado</th>
           <th>Producto</th>
           <th>P. Bruto</th>
           <th>P. Tara</th>
           <th>P. Neto Kg</th>
           <th>P. Neto Qq</th>
           <th>P. Neto Tm</th>
           <th>Humedad</th>
           <th>Impureza</th>
           <th>G. Germinado</th>
           <th>G.P. Negra</th>
           <th>G.P. Verde</th>
           <th>G. Picado</th>
           <th>G. Van</th>
           <th>Ph</th>
           <th>Observaciones</th>
           
         </tr> 

        </thead>

        <tbody>

           <?php

            if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

            }else{

              $fechaInicial = null;
              $fechaFinal = null;

            } 

            $ciudad = ControladorCiudad::ctrRangoFechasCiudad($fechaInicial, $fechaFinal);           

            foreach ($ciudad as $key => $value) {
                    
              echo '<tr>

                  <td>'.($key+1).'</td>

                    <td style="width:180px;">

                    <div class="btn-group" style="width:180px;">

                      <button class="btn btnImprimirActa" style="background-color:#00bFFF" token="'.$value["token"].'" title="ACTA DE RECEPCIÓN PROVISIONAL">

                        <i class="fa fa-print" style="color:#FFFFFF"></i>

                      </button>

                      <button class="btn btnImprimir" style="background-color:#FFA500" token="'.$value["token"].'" title="ACTA DE ENTREGA PROVISIONAL">

                        <i class="fa fa-print" style="color:#FFFFFF"></i>

                      </button>

                      <button class="btn btn-danger btnImprimirRecepcionD" token="'.$value["token"].'" title="ACTA DE RECEPCIÓN DEFINITIVO">

                        <i class="fa fa-print" style="color:#FFFFFF"></i>
                        
                      </button>

                      <button class="btn btnImprimirEntregaD" style="background-color: #17A589" token="'.$value["token"].'" title="ACTA DE ENTREGA DEFINITIVO">

                        <i class="fa fa-print" style="color:#FFFFFF"></i>
                        
                      </button>

                    </div>  

                  </td>

                  <td>'.$value["ciuda"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["idUsuario"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>'.$value["destino"].'</td>
                  <td>'.$value["vehiculo"].'</td>
                  <td>'.$value["placa"].'</td>
                  <td>'.$value["conductor"].'</td>
                  <td>'.$value["ci"].'</td>
                  <td>'.$value["fechaH"].'</td>
                  <td>'.$value["procedencia"].'</td>
                  <td>'.$value["porte"].'</td>
                  <td>'.$value["dim"].'</td>
                  <td>'.$value["proveedor"].'</td>
                  <td>'.$value["fechaS"].'</td>
                  <td>'.$value["precinto"].'</td>
                  <td>'.$value["factura"].'</td>
                  <td>'.$value["certificado"].'</td>
                  <td>'.$value["producto"].'</td>
                  <td>'.$value["bruto"].'</td>
                  <td>'.$value["tara"].'</td>
                  <td>'.$value["netoK"].'</td>
                  <td>'.$value["netoQ"].'</td>
                  <td>'.$value["netoT"].'</td>
                  <td>'.$value["humedad"].'</td>
                  <td>'.$value["impureza"].'</td>
                  <td>'.$value["germinado"].'</td>
                  <td>'.$value["negra"].'</td>
                  <td>'.$value["verde"].'</td>
                  <td>'.$value["picado"].'</td>
                  <td>'.$value["partido"].'</td>
                  <td>'.$value["ph"].'</td>
                  <td>'.$value["observa"].'</td>

                </tr>';

              }

          ?>

        </tbody>

        <tfoot>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th style="width:115px">Acciones</th>
           <th>Ciudad</th>
           <th>Usuario</th>
           <th>Destino</th>
           <th>Vehiculo</th>
           <th>Placa</th>
           <th>Conductor</th>
           <th>Ci</th>
           <th>Ingreso</th>
           <th>Procedencia</th>
           <th>Porte</th>
           <th>Dim</th>
           <th>Proveedor</th>
           <th>Salida</th>
           <th>Precinto</th>
           <th>Factura</th>
           <th>Certificado</th>
           <th>Producto</th>
           <th>P. Bruto</th>
           <th>P. Tara</th>
           <th>P. Neto Kg</th>
           <th>P. Neto Qq</th>
           <th>P. Neto Tm</th>
           <th>Humedad</th>
           <th>Impureza</th>
           <th>G. Germinado</th>
           <th>G.P. Negra</th>
           <th>G.P. Verde</th>
           <th>G. Picado</th>
           <th>G. Van</th>
           <th>Ph</th>
           <th>Observaciones</th>
           
         </tr> 

        </tfoot>


       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CIUDAD
======================================-->

<div id="modalAgregarCiudad" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Acta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA CIUDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueCiudad" placeholder="Ingresar Ciudad" required> -->

                <select class="form-control input-lg" name="nueCiudad">
                  
                  <option value="">SELECCIONAR CIUDAD</option>

                  <option value="LA PAZ">LA PAZ</option>

                  <option value="ORURO">ORURO</option>

                  <option value="EL ALTO">EL ALTO</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control" id="nueUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="nueUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA DESTINO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueDestino" placeholder="Ingresar destino" required> -->

                <select class="form-control input-lg" name="nueDestino">
                  
                  <option value="">SELECCIONAR DESTINO</option>

                  <option value="PLANTA CARACOLLO">PLANTA CARACOLLO</option>

                  <option value="MOLINO ANDINO">MOLINO ANDINO</option>

                  <option value="SIMSA">SIMSA</option>

                  <option value="TORRE MOLINO">TORRE MOLINO</option>

                  <option value="MOLINO BOLIVIANO CMB">MOLINO BOLIVIANO CMB</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA LA VEHICULO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueVehiculo" placeholder="INGRESAR VEHICULO" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PLACA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nuePlaca" placeholder="INGRESAR PLACA" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONDUCTOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueConductor" placeholder="INGRESAR CONDUCTOR" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueCi" placeholder="INGRESAR CEDULA DE IDENTIDAD" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROCEDENCIA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueProcedencia" placeholder="INGRESAR LUGAR DE PROCEDENCIA" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CARTA DE PORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nuePorte" placeholder="INGRESAR CARTA DE PORTE Y MIC/DTA" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueDim" placeholder="INGRESAR DIM" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROVEEDOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueProveedor" placeholder="Ingresar proveedor" required> -->

                <select class="form-control input-lg" name="nueProveedor">
                  
                  <option value="">SELECCIONAR PROVEEDOR</option>

                  <option value="AGROMILAGRO">AGROMILAGRO</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE SALIDA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">SELECCIONA FECHA DE SALIDA</span> 


                <input type="date" class="form-control input-lg" name="nueFechaS" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECINTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nuePrecinto" placeholder="INGRESAR PRECINTO" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FACTURA COMERCIAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueFactura" placeholder="INGRESAR FACTURA COMERCIAL DE EXPORTACIÓN" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CERTIFICADO DE CONTROL DE CARGA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueCertificado" placeholder="INGRESAR CERTIFICADO DE CONTROL DE CARGA" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRODUCTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueProducto" placeholder="Ingresar producto" required> -->

                <select class="form-control input-lg" name="nueProducto">
                  
                  <option value="">SELECCIONAR PRODUCTO</option>

                  <option value="GRANO DE TRIGO LIMPIO Y SECO">GRANO DE TRIGO LIMPIO Y SECO</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO BRUTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueBruto" step="any" placeholder="INGRESAR PESO BRUTO kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO TARA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueTara" step="any" placeholder="INGRESAR PESO TARA kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Kg -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoK" step="any" placeholder="INGRESAR PESO NETO kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Qq -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoQ" step="any" placeholder="INGRESAR PESO NETO qq" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO TM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoT" step="any" placeholder="INGRESAR PESO NETO TM" required>

              </div>

            </div>

            <!-- ENTRADA HUMEDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueHumedad" step="any" placeholder="INGRESAR HUMEDAD" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA IMPUREZA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueImpureza" step="any" placeholder="INGRESAR LA IMPUREZA" required>

              </div>

            </div>

            <!-- ENTRADA PARA GERMINADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueGerminado" step="any" placeholder="INGRESAR EL GERMINADO" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. NEGRA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueNegra" placeholder="INGRESAR G.P. NEGRA" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. VERDE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueVerde" step="any" placeholder="INGRESAR G.P. VERDE" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. PICADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePicado" step="any" placeholder="INGRESAR G. PICADO" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. VAN/PARTIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePartido" step="any" placeholder="INGRESAR G. VAN/PARTIDO" required>

              </div>

            </div>

            <!-- ENTRADA PARA PH -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePh" step="any" placeholder="INGRESAR EL PH" required>

              </div>

            </div>

            <!-- ENTRADA PARA LAS OBSERVACIONES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="nueObserva" placeholder="INGRESAR LAS OBSERVACIONES" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Acta</button>

        </div>

        <?php

          $crearCiudad = new ControladorCiudad();
          $crearCiudad -> ctrCrearCiudad();

        ?> 

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CIUDAD
======================================-->

<div id="modalEditarCiudad" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar acta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA CIUDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">SELECCIONAR CIUDAD</span> 

                 <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediCiudad" id="ediCiudad" required> -->

                <input type="hidden" id="idCiudad" name="idCiudad">
                <input type="hidden" id="token" name="token">

                <select class="form-control input-lg" name="ediCiudad">
                  
                  <option value="" id="ediCiudad"></option>

                  <option value="LA PAZ">LA PAZ</option>

                  <option value="ORURO">ORURO</option>

                  <option value="EL ALTO">EL ALTO</option>

                </select>


              </div>

            </div>

             <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" class="form-control" id="ediUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                <input type="hidden" name="ediUsuario" value="<?php echo $_SESSION["id"]; ?>">

              </div>

            </div>

            <!-- ENTRADA PARA DESTINO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">SELECIONAR DESTINO</span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediDestino" id="ediDestino" required> -->

                <select class="form-control input-lg" name="ediDestino">
                  
                  <option value="" id="ediDestino"></option>

                  <option value="PLANTA CARACOLLO">PLANTA CARACOLLO</option>

                  <option value="MOLINO ANDINO">MOLINO ANDINO</option>

                  <option value="SIMSA">SIMSA</option>

                  <option value="TORRE MOLINO">TORRE MOLINO</option>

                  <option value="MOLINO BOLIVIANO CMB">MOLINO BOLIVIANO CMB</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA LA VEHICULO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR VEHICULO</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediVehiculo" id="ediVehiculo" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PLACA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PLACA</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediPlaca" id="ediPlaca" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONDUCTOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR CONDUCTOR</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediConductor" id="ediConductor" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR CEDULA DE IDENTIDAD</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediCi" id="ediCi" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROCEDENCIA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PROCEDENCIA</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediProcedencia" id="ediProcedencia"required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CARTA DE PORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR CARTA DE PORTE MIC/DTA</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediPorte" id="ediPorte" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR DIM</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediDim" id="ediDim" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROVEEDOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">SELECCIONAR PROVEEDOR</span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediProveedor" id="ediProveedor" required> -->

                <select class="form-control input-lg" name="ediProveedor">
                  
                  <option value="" id="ediProveedor"></option>

                  <option value="AGROMILAGRO">AGROMILAGRO</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE SALIDA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITA FECHA DE SALIDA</span> 

                <input type="date" class="form-control input-lg" name="ediFechaS" id="ediFechaS" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECINTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PRECINTO</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediPrecinto" id="ediPrecinto" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FACTURA COMERCIAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR FACTURA COMERCIAL DE EXPORTACIÓN</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediFactura" id="ediFactura" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CERTIFICADO DE CONTROL DE CARGA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR CERTIFICADO DE CONTROL DE CARGA</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediCertificado" id="ediCertificado" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRODUCTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">SELECCIONAR PRODUCTO</span> 

                <!-- <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediProducto" id="ediProducto" required> -->

                <select class="form-control input-lg" name="ediProducto">
                  
                  <option value="" id="ediProducto"></option>

                  <option value="GRANO DE TRIGO LIMPIO Y SECO">GRANO DE TRIGO LIMPIO Y SECO</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO BRUTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PESO BRUTO kg</span> 

                <input type="number" class="form-control input-lg" name="ediBruto" id="ediBruto" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO TARA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PESO TARA kg</span> 

                <input type="number" class="form-control input-lg" name="ediTara" id="ediTara" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Kg -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PESO NETO kg</span> 

                <input type="number" class="form-control input-lg" name="ediNetoK" id="ediNetoK" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Qq -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PESO NETO qq</span> 

                <input type="number" class="form-control input-lg" name="ediNetoQ" id="ediNetoQ" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO TM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR PESO NETO TM</span> 

                <input type="number" class="form-control input-lg" name="ediNetoT" id="ediNetoT" step="any" required>

              </div>

            </div>

            <!-- ENTRADA HUMEDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR HUMEDAD</span> 

                <input type="number" class="form-control input-lg" name="ediHumedad" id="ediHumedad" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA IMPUREZA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR IMPUREZA</span> 

                <input type="number" class="form-control input-lg" name="ediImpureza" id="ediImpureza" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA GERMINADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR GERMINADO</span> 

                <input type="number" class="form-control input-lg" name="ediGerminado" id="ediGerminado" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. NEGRA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR G.P. NEGRA</span> 

                <input type="text" class="form-control input-lg" name="ediNegra" id="ediNegra" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. VERDE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR G.P. VERDE</span> 

                <input type="number" class="form-control input-lg" name="ediVerde" id="ediVerde" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. PICADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR G. PICADO</span> 

                <input type="number" class="form-control input-lg" name="ediPicado" id="ediPicado" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. VAN/PARTIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR G. VAN/PARTIDO</span> 

                <input type="number" class="form-control input-lg" name="ediPartido" id="ediPartido" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA PH -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR EL PH</span> 

                <input type="number" class="form-control input-lg" name="ediPh" id="ediPh" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA LAS OBSERVACIONES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">EDITAR OBSERVACIONES</span> 

                <input type="text" class="form-control input-lg" onkeypress="mayus(this);" name="ediObserva" id="ediObserva" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

        <?php

          $editarCiudad = new ControladorCiudad();
          $editarCiudad -> ctrEditarCiudad();

        ?>

      </form>

    </div>

  </div>

</div>




