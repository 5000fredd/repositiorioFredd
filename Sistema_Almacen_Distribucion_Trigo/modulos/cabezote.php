 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		
		<!-- logo mini -->
		<span class="logo-mini">
			
			<img src="vistas/img/plantilla/log.png" class="img-responsive" style="padding:10px">

		</span>

		<!-- logo normal -->

		<span class="logo-lg">
			
			
			<!-- <img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding:10px 0px"> -->

		</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	&nbsp;&nbsp;&nbsp;&nbsp; SIRE - INBOL
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					if($_SESSION["foto"] != ""){

						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

						echo '<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span> ';

					}else{


						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}


					?>
						
						<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">

						<li class="user-header">

		                    <img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
		                    <p>
		                    <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span> 
		                    <br>
							<span class="hidden-xs"><?php  echo $_SESSION["perfil"]; ?></span>
							</p>		                   

	                  	</li>
						
						<li class="user-body">
							
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