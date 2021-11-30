<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Tienda de camisetas</title>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body>
		<div id="container">
			<!-- HEADER -->
			<header id="header">
				<div id="logo">
					<img src="assets/img/camiseta.png" alt="Logo Camiseta">
					<a href="index.php">
						Tienda de camisetas
					</a>
				</div>
			</header>

			<!-- NAV -->
			<nav id="menu">
				<ul>
					<li>
						<a href="">Inicio</a>
					</li>
				</ul>
			</nav>

			<div id="content">
				<!-- SIDEBAR -->
				<aside id="lateral">
					<div id="login" class="block_aside">
						<h3>Entrar a la web</h3>
						<form action="" method="POST">
							<label for="email">Email</label>
							<input type="email" name="email">

							<label for="password">Contraseña</label>
							<input type="password" name="password">

							<input type="submit" value="Acceder">
						</form>

						<ul>
							<li><a href="">Mis pedidos</a></li>
							<li><a href="">Mi cuenta</a></li>
						</ul>
					</div>
				</aside>
				<!-- MAIN -->
				<div id="central">
					<h1>Productos destacados</h1>
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiste azul ancha</h2>
						<p>30€</p>
						<a href="" class="button">Comprar</a>
					</div>
				</div>

			</div>
			<!-- FOOTER -->
			<footer id="footer">
				<p>Desarrollado por Víctor León &copy;<?=date('Y')?></p>
			</footer>
		</div>
	</body>
	</html>
