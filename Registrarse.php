<html>
<head>

	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contenedor">

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
			<h3>Completa Tus Datos:</h3>
			<form name="Registro" action="registrarse.php" method="get">
				<table class="AcomodarTablaRegistro">
					<tr> <!--Caja para el Nombre-->
						<td><label for="Nombre">Nombre:</label></td>
						<td><input type="text" id="Nombre" name="NombreUsuario" ></td>
					</tr>
					<tr> <!--Caja para el Apellido-->	
						<td><label for="Apellido">Apellido:</label></td>
						<td><input type="text" id="Apellido" name="ApellidoUsuario" ></td>
					</tr>
					<tr> <!--Caja para el Usuario-->	
						<td><label for="Usuario">Usuario:</label></td>
						<td><input type="text" id="Usuario" name="idUsuario" ></td>
					</tr>
					<tr> <!--Caja para la Foto-->
						<td><label for="Foto">Foto:</label></td>
						<td><input type="file" id="Foto" name="FotoUsuario" ></td>
					</tr>
					<tr> <!--Caja para el Email-->
						<td><label for="Email">Email:</label></td>
						<td><input type="text" id="Email" name="EmailUsuario"></td>
					</tr>
					<tr> <!--Caja para la Contraseña-->
						<td><label for="Contraseña">Contrase&ntildea:</label></td>
						<td><input type="password" id="Contraseña" name="ContraseñaUsuario" maxlength="20"></td>
					</tr>
					<tr> <!--Caja para Confirmar La Contraseña-->
						<td><label for="ConfirContra">Confirmar Contrase&ntildea:</label></td>
						<td><input type="password" id="ConfirContra" name="ConfirContraUsuario"
							maxlength="20"></td>
					</tr>
					<tr> <!--Boton Para Enviar Formulario-->
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="EnviarInformacion" id="Enviar"></td>
					</tr>
				</table>
			</form>
		</section>
	</div>	
</body>
</html>
