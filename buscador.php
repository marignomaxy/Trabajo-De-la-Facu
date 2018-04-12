<?php 
	require_once "conexion.php";
	$autor='_POST["BuscadorAutor"]';
	$libro="_POST['BuscadorLibro']";
	$c= new conectar();
	$conexion=$c->conexion();
	$sql="SELECT * from libros WHERE libro='$libro'";
	$result=mysqli_query($conexion,$sql);
	while ($resultado = mysqli_fetch_row($result)): {
		echo $resultado[1];
	}
endwhile
 ?>