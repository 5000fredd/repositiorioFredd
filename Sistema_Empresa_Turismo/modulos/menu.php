<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

		echo	'<li class="active">

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

				<a href="hotel">

					<i class="fa fa-th"></i>
					<span>Hotel</span>

				</a>

			</li>

			<li>

				<a href="paquete">

					<i class="fa fa-product-hunt"></i>
					<span>Paquete</span>

				</a>

			</li>

			<li>

				<a href="reserva">

					<i class="fa fa-users"></i>
					<span>Reserva</span>

				</a>

			</li>

			<li>

				<a href="perfil">

					<i class="fa fa-circle"></i>
					<span>Perfil</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Agente"){

		echo	'<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="reserva">

					<i class="fa fa-users"></i>
					<span>Reserva</span>

				</a>

			</li>

			<li>

				<a href="perfil">

					<i class="fa fa-circle"></i>
					<span>Perfil</span>

				</a>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>