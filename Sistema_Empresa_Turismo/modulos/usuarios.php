<?php

if($_SESSION["perfil"] == "Agente"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar usuarios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>

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
           <th>Nacimiento</th>
           <th>Ci</th>
           <th>Teléfono</th>
           <th>Dirección</th>
           <th>Celular</th>
           <th>Correo</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           
         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        foreach ($usuarios as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["paternoU"].'</td>
                  <td>'.$value["maternoU"].'</td>
                  <td>'.$value["sexoU"].'</td>
                  <td>'.$value["nacimientoU"].'</td>
                  <td>'.$value["ci"].'</td>
                  <td>'.$value["telefonoU"].'</td>
                  <td>'.$value["direccionU"].'</td>
                  <td>'.$value["celularU"].'</td>
                  <td>'.$value["correoU"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="55px"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                  

                </tr>';
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
           <th>Nacimiento</th>
           <th>Ci</th>
           <th>Teléfono</th>
           <th>Dirección</th>
           <th>Celular</th>
           <th>Correo</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           
         </tr>

        </tfoot>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar el nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PATERNO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoPaterno" placeholder="Ingresar apellido paterno" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL MATERNO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoMaterno" placeholder="Ingresar apellido materno" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL SEXO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" name="nuevoSexo">
                  
                  <option value="">Seleccionar Género</option>

                  <option value="Masculino">Masculino</option>

                  <option value="Femenino">Femenino</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL NACIMIENTO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">Nacimiento</span> 

                <input type="date" class="form-control input-lg" name="nuevoNacimiento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCi" placeholder="Ingresar la cédula de identidad" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar el número de telefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDireccion" placeholder="Ingresar la dirección" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCelular" placeholder="Ingresar el número de celular" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCorreo" placeholder="Ingresar el correo electrónico" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil">
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Agente">Agente</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

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

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
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

            <!-- ENTRADA PARA EL NACIMIENTO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon">NACIMIENTO</span> 

                <input type="date" class="form-control input-lg" id="editarNacimiento" name="editarNacimiento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CI -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> CI</span> 

                <input type="text" class="form-control input-lg" id="editarCi" name="editarCi" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> TELEFONO</span> 

                <input type="text" class="form-control input-lg" id="editarTelefono" name="editarTelefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> DIRECCIÓN</span> 

                <input type="text" class="form-control input-lg" id="editarDireccion" name="editarDireccion" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> CELULAR</span> 

                <input type="text" class="form-control input-lg" id="editarCelular" name="editarCelular" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> CORREO</span> 

                <input type="text" class="form-control input-lg" id="editarCorreo" name="editarCorreo" value=""  required>

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

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> PASSWORD</span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"> PERFIL</span> 

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Agente">Agente</option>

                </select>

              </div>

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

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

        <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 


