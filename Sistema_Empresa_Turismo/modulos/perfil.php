<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar perfil
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar perfil</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Paterno</th>
           <th>Materno</th>
           <th>Sexo</th>
           <th>Foto</th>

         </tr> 

        </thead>


        <tbody>

          <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorUsuario::ctrMostrarUsuarios($item, $valor);

        foreach ($usuarios as $key => $value){
         
        if($value["id"] == $_SESSION["id"]){

          echo ' <tr>
                  <td>'.($key+1).'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                    </div>  

                  </td>

                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["paternoU"].'</td>
                  <td>'.$value["maternoU"].'</td>
                  <td>'.$value["sexoU"].'</td>';

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="55px"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="55px"></td>';

                  }
                  

                echo '</tr>';
            }

          }

        ?> 

        </tbody>

        <tfoot>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Acciones</th>
           <th>Nombre</th>
           <th>Paterno</th>
           <th>Materno</th>
           <th>Sexo</th>
           <th>Foto</th>

         </tr> 

        </tfoot>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
  MODAL EDITAR USUARIO
======================================-->

          <div id="modalEditarUsuario" class="modal fade" role="dialog">
            
            <div class="modal-dialog">

              <div class="modal-content">

                <form role="form" method="post" enctype="multipart/form-data">

                  <!--=====================================
                  CABEZA DEL MODAL
                  ======================================-->

                  <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Editar perfil</h4>

                  </div>

                  <!--=====================================
                  CUERPO DEL MODAL
                  ======================================-->

                  <div class="modal-body">

                    <div class="box-body">

                      <!-- ENTRADA PARA EL NOMBRE -->
                      
                      <div class="form-group">
                        
                        <div class="input-group">

                          <!-- <input type="hidden" id="id" name="id"> -->
                        
                          <span class="input-group-addon"> NOMBRE</span> 

                          <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" required>

                        </div>

                      </div>

                      <!-- ENTRADA PARA EL PATERNO -->
                      
                      <div class="form-group">
                        
                        <div class="input-group">
                        
                          <span class="input-group-addon"> PATERNO</span> 

                          <input type="text" class="form-control input-lg" id="editarPaterno" name="editarPaterno" required>

                        </div>

                      </div>

                      <!-- ENTRADA PARA EL MATERNO -->
                      
                      <div class="form-group">
                        
                        <div class="input-group">
                        
                          <span class="input-group-addon"> MATERNO</span> 

                          <input type="text" class="form-control input-lg" id="editarMaterno" name="editarMaterno" required>

                        </div>

                      </div>

                      <!-- ENTRADA PARA EL SEXO -->
                      
                      <div class="form-group">
                        
                        <div class="input-group">
                        
                          <span class="input-group-addon"> GÉNERO</span> 

                          <select class="form-control input-lg" name="editarSexo">
                            
                            <option value="" id="editarSexo"></option>

                            <option value="Masculino">Masculino</option>

                            <option value="Femenino">Femenino</option>

                          </select>

                        </div>

                      </div>


                      <!-- ENTRADA PARA LA CONTRASEÑA -->

                       <div class="form-group">
                        
                        <div class="input-group">
                        
                          <span class="input-group-addon"> PASSWORD</span> 

                          <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                          <input type="hidden" id="passwordActual" name="passwordActual">

                        </div>

                      </div>

                      <!-- ENTRADA PARA EL USUARIO -->

                       <div class="form-group">
                        
                        <div class="input-group">
                        
                          <span class="input-group-addon"> USUARIO</span> 

                          <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" readonly>

                        </div>

                        <small style="color: red;">El campo no se debe editar por recomendación del sistema</small>

                      </div>

                      <!-- ENTRADA PARA SUBIR FOTO -->

                       <div class="form-group">
                        
                        <div class="panel">SUBIR FOTO</div>

                        <input type="file" class="nuevaFoto" name="editarFoto">

                        <p class="help-block">Peso máximo de la foto 2MB</p>

                        <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                        <input type="hidden" name="fotoActual" id="fotoActual">

                      </div>

                    </div>

                  </div>

                  <!--=====================================
                  PIE DEL MODAL
                  ======================================-->

                  <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Modificar perfil</button>

                  </div>

                  <?php

                    $editarUsuario = new ControladorUsuario();
                    $editarUsuario -> ctrEditarUsuario();

                  ?> 

                </form>

              </div>

            </div>

          </div>




