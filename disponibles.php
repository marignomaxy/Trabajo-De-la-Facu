<?php
	 require_once "conexion.php";
	 $c= new conectar();
	 $conexion=$c->conexion();

	 $cant="SELECT operaciones.id,operaciones.libros_id,operaciones.ultimo_estado,libros.id 
	 FROM operaciones 
	 left join libros ON operaciones.libros_id=libros.id
	 " ;
 	 $ope=mysqli_query($conexion,$cant);
 	 $reservados=0;
 	 $prestados=0;
 	 $id_actual=1;
 	 if($operaciones=mysqli_fetch_row($ope) and $operaciones[0]<10) {
 	 	$reservados=0;
 	 	$prestados=0;
 	 	if (strcmp($operaciones[2], "RESERVADO")==0) {
	     	 $reservados++;
		 }else if (strcmp($operaciones[2], "PRESTADO")==0) {
	    	$prestados++;
 	 	}
 	 }
 	 	
 							  
?>