<?php 
	require_once "conexion.php";
	$l= new conectar();
	$link=$l->conexion();
	Include("ValidarRegistroYConfiguracion.php");

 ?>


<html>
<head>

	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8"/>
	<script type="text/javascript" src="js/javaScript_Registrar.js"></script>
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

			<?php
      if(isset($_POST['Entrar'])){
        $nombre=$_POST['txtNombre'];
        $apellido=$_POST['txtApellido'];
        $email=$_POST['txtEmail'];
        $NueContraseña=$_POST['txtPassword'];
        $ReNueContraseña=$_POST['txtRePassword'];
        //valido si hay alguna variable no seteada, sino hace lo q deberia		
if(($nombre=="")or($apellido=="")or($email=="")or
($NueContraseña=="")or($ReNueContraseña=="")or
(empty($_FILES['fileImagen']['name']))){
	echo '<script>window.location="Registrarse.php";</script>';
}else{
	if(!validarLetras($nombre)){
		//echo  '<script>alert("!El nombre debe ser escrito con Letras!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validarLetras($apellido)){
		//echo  '<script>alert("!El Apellido debe ser escrito con Letras!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validaemail($email)){
		//echo  '<script>alert("!El Email debe ser escrito Correctamente!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validarContraseña($NueContraseña)){
		//echo  '<script>alert("!La contraseña debe tener por lo menos 6 caracteres y debe ser escrito con letras mayuculas, minusculas y numeros o algunos de estos caracteres @#%&-_.;:!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if($NueContraseña!=$ReNueContraseña){
		//echo  '<script>alert("!Las contraseñas ingresadas no coinciden!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!empty($_FILES['fileImagen']['name'])) {
	$archivo = $_FILES['fileImagen']['tmp_name'];
	$tamanio = $_FILES['fileImagen']['size'];
	$tipo    = $_FILES['fileImagen']['type'];
	$fp = fopen($archivo, "r");
	$contenido = fread($fp, $tamanio);
	$contenido = addslashes($contenido);
	fclose($fp);
	}
	//aca termina de validar todo
	else{
	$verificar=mysqli_query($link,"select mail from usuarios where email='".$email."'");
	//Pregunta si hay algun email
	if(mysqli_num_rows($verificar)!=0){
		echo  '<script>alert("!El email ya existe!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else{
		//Si no esta ese mail de usuario en la BDD, lo agrega
		$query="INSERT INTO usuarios (id,apellido,nombre,email,contrasenia,foto_contenido,foto_tipo) VALUES (null,'$nombre'
		,'$apellido','$email','$NueContraseña','".$contenido."'
		,'".$tipo."')";
		mysqli_query($link,$query);
		echo "<script language='javascript'>
		alert('Usted fue registrado correctamente!.');
		location.href = \"Index.php\";
		</script>";
	}//termina de insertar en bdd nuevo usuario
}//else de las validaciones
}//else de que estan todos los valores seteados
}//termina aca lo que hace cuando aprietan el boton de registrar
?>

<form action="Registrarse.php" enctype="multipart/form-data" method="post">
<div class="Formulario_Registrase">
<h1 id="
			<?php
      if(isset($_POST['Entrar'])){
        $nombre=$_POST['txtNombre'];
        $apellido=$_POST['txtApellido'];
        $email=$_POST['txtEmail'];
        $NueContraseña=$_POST['txtPassword'];
        $ReNueContraseña=$_POST['txtRePassword'];
        //valido si hay alguna variable no seteada, sino hace lo q deberia		
if(($nombre=="")or($apellido=="")or($email=="")or
($NueContraseña=="")or($ReNueContraseña=="")or
(empty($_FILES['fileImagen']['name']))){
	echo '<script>window.location="Registrarse.php";</script>';
}else{
	if(!validarLetras($nombre)){
		//echo  '<script>alert("!El nombre debe ser escrito con Letras!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validarLetras($apellido)){
		//echo  '<script>alert("!El Apellido debe ser escrito con Letras!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validaemail($email)){
		//echo  '<script>alert("!El Email debe ser escrito Correctamente!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!validarContraseña($NueContraseña)){
		//echo  '<script>alert("!La contraseña debe tener por lo menos 6 caracteres y debe ser escrito con letras mayuculas, minusculas y numeros o algunos de estos caracteres @#%&-_.;:!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if($NueContraseña!=$ReNueContraseña){
		//echo  '<script>alert("!Las contraseñas ingresadas no coinciden!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else if(!empty($_FILES['fileImagen']['name'])) {
	$archivo = $_FILES['fileImagen']['tmp_name'];
	$tamanio = $_FILES['fileImagen']['size'];
	$tipo    = $_FILES['fileImagen']['type'];
	$fp = fopen($archivo, "r");
	$contenido = fread($fp, $tamanio);
	$contenido = addslashes($contenido);
	fclose($fp);
	}
	//aca termina de validar todo
	else{
	$verificar=mysqli_query($link,"select mail from usuarios where email='".$email."'");
	//Pregunta si hay algun email
	if(mysqli_num_rows($verificar)!=0){
		echo  '<script>alert("!El email ya existe!")</script>';
		echo '<script>window.location="Registrarse.php";</script>';
	}
	else{
		//Si no esta ese mail de usuario en la BDD, lo agrega
		$query="INSERT INTO usuarios (id,apellido,nombre,email,contrasenia,foto_contenido,foto_tipo) VALUES (null,'$nombre'
		,'$apellido','$email','$NueContraseña','".$contenido."'
		,'".$tipo."')";
		mysqli_query($link,$query);
		echo "<script language='javascript'>
		alert('Usted fue registrado correctamente!.');
		location.href = \"Index.php\";
		</script>";
	}//termina de insertar en bdd nuevo usuario
}//else de las validaciones
}//else de que estan todos los valores seteados
}//termina aca lo que hace cuando aprietan el boton de registrar
?>RegistrarseId">Registrar</h1>
<div>
<span class="Izquierda_Form"><label class="label_Form">Nombre</label></span>
<span class="Derecha_Form">	<input name="txtNombre" id="txtNombre" type="text" class="input_NombreUsuario_Contrasena_Registrarse" placeholder="Ej: Nombre"></span>
</div>
<div>
<span class="Izquierda_Form"><label class="label_Form">Apellido</label></span>
<span class="Derecha_Form">	<input name="txtApellido" id="txtApellido" type="text" class="input_NombreUsuario_Contrasena_Registrarse" placeholder="Ej: Apellido"></span>
</div>
<div>
<span class="Izquierda_Form"><label class="label_Form">Email</label></span>
<span class="Derecha_Form">	<input name="txtEmail" id="txtEmail" type="email" class="input_NombreUsuario_Contrasena_Registrarse" placeholder="Ej: email@gmail.com"></span>
</div>
<div>
<span class="Izquierda_Form"><label class="label_Form">Contraseña</label></span>
<span class="Derecha_Form">	<input name="txtPassword" id="txtPassword" type="password" class="input_NombreUsuario_Contrasena_Registrarse" placeholder="Ingrese su contraseña"></span>
</div>
<div >
<span class="Izquierda_Form"><label class="label_Form">Confirmar contraseña</label></span>
<span class="Derecha_Form">	<input name="txtRePassword" id="txtRePassword" type="password" class="input_NombreUsuario_Contrasena_Registrarse" placeholder="Ingrese nuevamente su contraseña"></span>
</div>
<div >
<span class="Izquierda_Form"><label class="label_Form">Foto de Perfil</label></span>
<span class="Derecha_Form"><input name="fileImagen" id="fileImagen" style="margin:5px ;" type="file" ></span>
</div>
<button id="Entrar" name="Entrar" class="input_Entrar" onclick="ValidarConfiguracion(this.form.fileImagen.value);"
>Configurar</button>
</div>
</form>


		</section>
	</div>	
</body>
</html>
