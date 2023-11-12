<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Acta de Recepción
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Acta de Recepción</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCiudad">
          
          Agregar Acta

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Ciudad</th>
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
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

           <?php

            $item = null;
            $valor = null;

            $ciudad = ControladorCiudad::ctrMostrarCiudad($item, $valor);

            foreach ($ciudad as $key => $value) {
                    
              echo '<tr>

                  <td>'.($key+1).'</td>
                  <td>'.$value["ciuda"].'</td>
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

                  <td>

                    <div class="btn-group">

                      <button class="btn btn-info btnImprimir" idCiudad="'.$value["idCiudad"].'">

                        <i class="fa fa-print"></i>

                      </button>
                        
                      <button class="btn btn-warning btnEditarCiudad" data-toggle="modal" data-target="#modalEditarCiudad" idCiudad="'.$value["idCiudad"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                </tr>';

            }

          ?>

        </tbody>

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

                <input type="text" class="form-control input-lg" name="nueCiudad" placeholder="Ingresar ciudad de Origen" required>

              </div>

            </div>

            <!-- ENTRADA PARA DESTINO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueDestino" placeholder="Ingresar destino" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA VEHICULO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueVehiculo" placeholder="Ingresar vehiculo" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PLACA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nuePlaca" placeholder="Ingresar placa" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONDUCTOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueConductor" placeholder="Ingresar conductor" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueCi" placeholder="Ingresar cedula de identidad" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROCEDENCIA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueProcedencia" placeholder="Ingresar lugar de procedencia" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CARTA DE PORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nuePorte" placeholder="Ingresar carta de porte y MIC/DTA" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueDim" placeholder="Ingresar dim" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROVEEDOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueProveedor" placeholder="Ingresar proveedor" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE SALIDA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">Fecha de Salida</span> 


                <input type="date" class="form-control input-lg" name="nueFechaS" placeholder="Ingresar fecha de salida" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECINTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nuePrecinto" placeholder="Ingresar el precinto" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FACTURA COMERCIAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueFactura" placeholder="Ingresar factura comercial de exportación" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CERTIFICADO DE CONTROL DE CARGA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueCertificado" placeholder="Ingresar certificado de control de carga" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRODUCTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueProducto" placeholder="Ingresar producto" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO BRUTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueBruto" min="0" step="any" placeholder="Ingresar peso bruto kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO TARA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueTara" min="0" step="any" placeholder="Ingresar peso tara kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Kg -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoK" min="0" step="any" placeholder="Ingresar peso neto kg" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Qq -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoQ" min="0" step="any" placeholder="Ingresar peso neto qq" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO TM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNetoT" min="0" step="any" placeholder="Ingresar peso neto TM" required>

              </div>

            </div>

            <!-- ENTRADA HUMEDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueHumedad" min="0" step="any" placeholder="Ingresar humedad" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA IMPUREZA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueImpureza" min="0" step="any" placeholder="Ingresar la impureza" required>

              </div>

            </div>

            <!-- ENTRADA PARA GERMINADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueGerminado" min="0" step="any" placeholder="Ingresar el germinado" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. NEGRA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueNegra" min="0" step="any" placeholder="Ingresar G.P. negra" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. VERDE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nueVerde" min="0" step="any" placeholder="Ingresar G.P. verde" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. PICADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePicado" min="0" step="any" placeholder="Ingresar G. picado" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. VAN/PARTIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePartido" min="0" step="any" placeholder="Ingresar G. VAN/PARTIDO" required>

              </div>

            </div>

            <!-- ENTRADA PARA PH -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="nuePh" min="0" step="any" placeholder="Ingresar el ph" required>

              </div>

            </div>

            <!-- ENTRADA PARA LAS OBSERVACIONES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nueObserva" placeholder="Ingresar Observaciones" required>

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
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                 <input type="text" class="form-control input-lg" name="ediCiudad" id="ediCiudad" required>

                <input type="hidden" id="idCiudad" name="idCiudad">

              </div>

            </div>

            <!-- ENTRADA PARA DESTINO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediDestino" id="ediDestino" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA VEHICULO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediVehiculo" id="ediVehiculo" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PLACA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediPlaca" id="ediPlaca" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONDUCTOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediConductor" id="ediConductor" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediCi" id="ediCi" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROCEDENCIA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediProcedencia" id="ediProcedencia"required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CARTA DE PORTE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediPorte" id="ediPorte" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediDim" id="ediDim" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PROVEEDOR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediProveedor" id="ediProveedor" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE SALIDA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="date" class="form-control input-lg" name="ediFechaS" id="ediFechaS" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRECINTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediPrecinto" id="ediPrecinto" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FACTURA COMERCIAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediFactura" id="ediFactura" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CERTIFICADO DE CONTROL DE CARGA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediCertificado" id="ediCertificado" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PRODUCTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediProducto" id="ediProducto" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO BRUTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediBruto" id="ediBruto" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO TARA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediTara" id="ediTara" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Kg -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediNetoK" id="ediNetoK" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO Qq -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediNetoQ" id="ediNetoQ" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PESO NETO TM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediNetoT" id="ediNetoT" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA HUMEDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediHumedad" id="ediHumedad" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA IMPUREZA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediImpureza" id="ediImpureza" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA GERMINADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediGerminado" id="ediGerminado" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. NEGRA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediNegra" id="ediNegra" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G.P. VERDE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediVerde" id="ediVerde" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. PICADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediPicado" id="ediPicado" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA G. VAN/PARTIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediPartido" id="ediPartido" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA PH -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="number" class="form-control input-lg" name="ediPh" id="ediPh" min="0" step="any" required>

              </div>

            </div>

            <!-- ENTRADA PARA LAS OBSERVACIONES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="ediObserva" id="ediObserva" required>

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




