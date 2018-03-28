<html>
<head>

	<title>Gestion de bibliotecas</title>
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

		<section class="main">
			<hr id="linea" />
			<!--Busqueda De Libros-->
			<div id="Catalogo" >
				<h3>Catalogo De Libros</h3>
			</div>
			<div id="BuscadorDeLibros" style="margin-left: 270px">
				<div class="enlinea">
					<h4>Busqueda De Libro: </h4>
					<form name="buscador" action="form_action.php" method="get" > 
						<div style="display:inline-flex;">
							<label for="Libro"> Libro:</label>
							<input type="search" name="BuscadorLibro" id="Libro" class="input" >
							<label for="Autor"> Autor:</label>
							<input type="search" name="BuscadorAutor" class="input" id="Autor">
							<input type="submit" name="Boton" class="acomodarBoton">
						</div>
					</form>
				</div>	
			</div>
	
			<!--Tablas De Libros-->
			<div class="acomodarTabla">
				<table class="altoTabla">
					<!--Encabezado De La Tabla-->
					<tr>
						<th>Portadas</th>
						<th>Nombre Del Libro</th>
						<th>Autor</th>
						<th>Ejemplares</th>
					</tr>

					<!--Primer Libro-->
					<tr>
						<td><img class="imagenTabla" src="1.jpg" alt="Portada Para Libros"></td>
						<td><a href="">Portada Para Libros</a></td>
						<td><a href="">Alberto Gomez</a></td>
						<td>5 (Disponibles:3 / Prestados:2)
						</td>
					</tr>
					<!--Segundo Libro-->
					<tr>
						<td><img class="imagenTabla" src="2.jpg" alt="No Subas"></td>
						<td><a href="">No Subas</a></td>
						<td><a href="">John Tamad</a></td>
						<td>6 (Disponibles:1 / Prestados:5)
						</td>
					</tr>
					<!--Tercer Libro-->
					<tr>
						<td><img class="imagenTabla" src="3.jpg" alt="No Subas"></td>
						<td><a href="">El Legado</a></td>
						<td><a href="">Francisco Lopez</a></td>
						<td>5 (Disponibles:4 / Prestados:1)
						</td>							

					</tr>
					<!-- Cuarto Libro-->
					<tr>
						<td><img class="imagenTabla" src="4.jpg" alt="No Subas"></td>
						<td><a href="">Cartas Desde La Isla De Skye</a></td>
						<td><a href="">Jessica Brockmoll</a></td>
						<td>6 (Disponibles:0 / Prestados:6)
						</td>

					</tr>
					<!--Quinto Libro-->
					<tr>
						<td><img class="imagenTabla" src="5.jpg" alt="No Subas"></td>
						<td><a href="">Todas las Adas del Reino</a></td>
						<td><a href="">Laura Gallego</a></td>
						<td>6 (Disponibles:1 / Prestados:5)
						</td>
					</tr>

				</table>
			</div>
		</section>
	</div>

</body>
</html>
