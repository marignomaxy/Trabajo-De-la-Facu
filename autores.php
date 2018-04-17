<?php 
	
	require_once "conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();
	$id= $_GET['id'];
	$sql="SELECT libros.titulo, libros.portada, libros.cantidad, autores.apellido, autores.nombre from libros inner join autores ON autores.id = libros.autores_id WHERE autores.id=$id";
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
			 <h1>Libros de <?php echo $libro[4].' '.$libro[3] ?></h1>
			 <table style="margin:auto;width: 90%;height: 25%;" class="table">
			 	<tr class="tr">
			 		<th class="th">Portada</th>
			 		<th class="th">Titulo</th>
			 		<th class="th">Ejemplares</th>
			 	</tr>
			 	<?php $cant=0; 
			 	while ($li=mysqli_fetch_row($result) and $cant<=5) { ?>
			 	<tr class="tr">
			 		<td class="td"><?php echo '<img class="imagenTabla" src="$li[1]" alt="Portada Para Libros"> ';?></td>
			 		<td class="td"><?php echo $li[0]; ?></td>
			 		<td class="td"><?php echo $li[2]; ?></td>
			 	</tr>

			<?php $cant++; } ?> 
			 </table>

			
		</section>
	</div>

</body>
</html>