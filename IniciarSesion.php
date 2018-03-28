<html>
<head>

	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>

		<header>
			<!--Parte para Registrarse/Iniciar Sesion -->
			<div class="superior">
				<a href="./IniciarSesion.php" class="enlinea">Iniciar Sesion</a> |
				<a href="./Registrarse.php" class="enlinea" >Registrarse</a>
			</div>	
			<div id="Logotipo" class="AcomodarLogo">
				<!--Logo-->
				<div class="logo">
					<img class="imagen" src="logotipo.png" alt="logo">
				</div>
			</div>

			<div id="menu">
				<ul>
					<li><a href="./index.php">Catalogo De Libros</a></li>
					<li><a href="">Autores</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</div>

		</header>

		<section>
			<h3>Ingresa Tus Datos:</h3>
			<form name="IniciarSesion" action=".php" method="get">
				<table class="AcomodarTablaIniciarSesion">
					<tr>
						<td><label for="Nombre">Usuario:</label></td>
						<td><input type="text" id="Nombre" name="idUsuario" ></td>
					</tr>
					<tr>	
						<td><label for="Contraseña">Contrase&ntildea:</label></td>
						<td><input type="text" id="Contraseña" name="ContraseñaUsuario" ></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="EnviarInformacion" id="Enviar"></td>
					</tr>
				</table>
			</form>


		</section>
	</div>	
</body>
</html>