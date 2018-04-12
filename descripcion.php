<?php 
	
	require_once "conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();
	$id= $_GET['id'];
	$sql="SELECT libros.id, libros.titulo, libros.portada, libros.cantidad,libros.descripcion, autores.apellido, autores.nombre from libros inner join autores ON autores.id = libros.autores_id WHERE libros.id=$id";
	$result=mysqli_query($conexion,$sql);

 ?>




<html>
<head>

	<title>Gestion de bibliotecas</title>
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
			<hr id="linea" />
			<?php $libro=mysqli_fetch_row($result)
			 ?>
			 <h1><?php echo $libro[1] ?></h1>
			 <p style="float:right;"><?php echo '<img class="imagenTabla" src="$ver[2]" alt="Portada Para Libros"> '?></p>
			 <p>Autor:<?php echo $libro[5].' '.$libro[6] ?></p>
			 <p>Ejemplares:<?php echo $libro[3]?></p>
			 <p>Descripcion: </p>
			 <p><?php echo $libro[4] ?></p>

			
		</section>
	</div>

</body>
</html>