<html>
<head>

	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
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

			<!--Busqueda De Libros-->
			<div id="BuscadorDeLibros" style="margin: 26px -200px -100px 180px;color: white;">
				<div class="enlinea">
					<h4 style="margin: 28px 0px;">Busqueda De Libro: </h4>
					<form name="buscador" action="buscador.php" method="post" > 
						<div style="display: table-caption;">
							<label for="Libro"> Libro:</label>
							<input type="search" name="BuscadorLibro" id="Libro" class="input" >
							<label for="Autor"> Autor:</label>
							<input type="search" name="BuscadorAutor" class="input" id="Autor">
							<input type="submit" name="Boton" class="acomodarBoton">
						</div>
					</form>
				</div>	
			</div>

		</header>

		<section>
			<h3>Completa Tus Datos:</h3>
			<form name="Registro" action="registrarse.php" method="get">
				<table class="AcomodarTablaRegistro">
					<tr>
						<td><label for="Nombre">Nombre:</label></td>
						<td><input type="text" id="Nombre" name="NombreUsuario" ></td>
					</tr>
					<tr>	
						<td><label for="Apellido">Apellido:</label></td>
						<td><input type="text" id="Apellido" name="ApellidoUsuario" ></td>
					</tr>
					<tr>	
						<td><label for="Usuario">Usuario:</label></td>
						<td><input type="text" id="Usuario" name="idUsuario" ></td>
					</tr>
					<tr>
						<td><label for="Foto">Foto:</label></td>
						<td><input type="file" id="Foto" name="FotoUsuario" ></td>
					</tr>
					<tr>
						<td><label for="Email">Email:</label></td>
						<td><input type="text" id="Email" name="EmailUsuario"></td>
					</tr>
					<tr>
						<td><label for="Contraseña">Contrase&ntildea:</label></td>
						<td><input type="password" id="Contraseña" name="ContraseñaUsuario" maxlength="20"></td>
					</tr>
					<tr>
						<td><label for="ConfirContra">Confirmar Contrase&ntildea:</label></td>
						<td><input type="password" id="ConfirContra" name="ConfirContraUsuario"
							maxlength="20"></td>
					</tr>
					<tr>
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
