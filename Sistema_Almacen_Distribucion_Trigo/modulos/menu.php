<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<?php

			if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<li>

				<a href="ciudad">

					<i class="fa fa-th"></i>
					<span>Acta de Recepción</span>

				</a>

			</li>

			<li>

				<a href="listado">

					<i class="fa fa-list-ul"></i>
					<span>Listado de Actas</span>

				</a>

			</li>';

			}

			if($_SESSION["perfil"] == "Empleado"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="ciudad">

					<i class="fa fa-th"></i>
					<span>Acta de Recepción</span>

				</a>

			</li>';

			}

		?>

		</ul>

	 </section>

</aside>