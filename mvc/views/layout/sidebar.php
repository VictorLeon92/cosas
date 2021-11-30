				<!-- SIDEBAR -->
				<aside id="lateral">
					<div id="login" class="block_aside">
						
						<?php if (!isset($_SESSION['identity'])) : ?>
						<h3>Entrar a la web</h3>
						<form action="<?=base_url?>usuario/login" method="POST">
							<label for="email">Email</label>
							<input type="email" name="email">

							<label for="password">Contraseña</label>
							<input type="password" name="password">

							<input type="submit" value="Acceder">
						</form>
						<?php else : ?>
						<h3>Hola, <?= $_SESSION['identity']->nombre ?>.</h3>
						<?php endif; ?>

						<ul>
							<a href="<?=base_url?>usuario/registro">Registrarse</a>
							<?php if (isset($_SESSION['admin'])) : ?>
							<li><a href="<?=base_url?>categoria/index">Gestionar categorías</a></li>
							<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
							<li><a href="">Gestionar pedidos</a></li>
							<?php endif; ?>
							<li><a href="">Mi cuenta</a></li>
							<?php if (isset($_SESSION['identity'])) : ?>
							<li><a href="">Mis pedidos</a></li>							
							<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
							<?php else: ?>
							<li><a href="<?=base_url?>usuario/registro">Registrarse</a></li>
							<?php endif; ?>

						</ul>
					</div>
				</aside>
				<!-- MAIN -->
				<div id="central">