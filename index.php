<?php 
	
	require_once "conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();
	$sql="SELECT libros.id, libros.titulo, libros.portada, libros.cantidad, autores.apellido, autores.nombre,autores.id
from libros
inner join autores ON autores.id = libros.autores_id
";
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
			<div id="Catalogo" >
				<h3>Catalogo De Libros :</h3>
			</div>
		
			<div class="main">
			<!--Tablas De Libros-->
			<div class="acomodarTabla">
				<table class="table">
					<!--Encabezado De La Tabla-->
					<tr class="tr">
						<th class="th">Portadas</th>
						<th class="th">Nombre Del Libro</th>
						<th class="th">Autor</th>
						<th class="th">Ejemplares</th>
					</tr>
					<?php $canti=0;
					while($canti<=4 and $ver=mysqli_fetch_row($result)){ ?>
					<!--Primer Libro-->
					<tr class="tr">
						<td class="td"><?php echo '<img class="imagenTabla" src="$ver[2]" alt="Portada Para Libros"> '?></td>
						<td class="td"><a href="descripcion.php?id=<?php echo $ver[0] ?>"><?php echo $ver [1]; ?></a></td>
						<td class="td"><a href="autores.php?id=<?php echo $ver[6] ?>"><?php echo $ver [5].', '.$ver[4]; ?></a></td>
						<!--<?php include('disponibles.php');
							$dis=$ver [3]-$reservados-$prestados;	 
						 ?>-->
						<td class="td"><?php echo $ver [3]."(Disponibles $dis-Prestados $prestados-Reservados $reservados)"; ?></td>
					</tr>
				<?php $canti++;
				 } ?>
				</table>
			</div>
			</div>
		</section>
	</div>

</body>
</html>
