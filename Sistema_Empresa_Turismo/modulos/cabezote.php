 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		
		<!-- logo mini -->
		<span class="logo-mini">
			
			<!--<img src="vistas/img/plantilla/icono-blanco.png" class="img-responsive" style="padding:10px">-->

		</span>

		<!-- logo normal -->

		<span class="logo-lg">
			
			<!--<img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding:10px 0px">-->

		</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	&nbsp;&nbsp;&nbsp;&nbsp; HOTEL ECOTURISMO
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					if($_SESSION["foto"] != ""){

						echo '<img class="user-image" alt="User Image" src="'.$_SESSION["foto"].'" >';

					}else{


						echo '<img class="user-image" alt="User Image" src="vistas/img/usuarios/default/anonymous.png" >';

					}


					?>
						
						<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">

						<li class="user-header">

							<?php

							if($_SESSION["foto"] != ""){

								echo '<img class="user-circle" alt="User Image" src="'.$_SESSION["foto"].'" >';

							}else{


								echo '<img class="user-circle" alt="User Image" src="vistas/img/usuarios/default/anonymous.png" >';

							}


							?>

		                    <p>
		                    <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span> 
		                    <br>
							<span class="hidden-xs"><?php  echo $_SESSION["perfil"]; ?></span>

							<small>Miembro actual de la institución</small>
							</p>	
								                   

	                  	</li>
						
						<li class="user-body">

							<div class="pull-left">
								
								<a href="perfil" class="btn btn-default btn-flat">Editar Perfil</a>

							</div>
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Cerrar Sesion</a>

							</div>

						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>