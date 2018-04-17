function ValidarConfiguracion(imagen){
	var nombre =document.getElementById("txtNombre").value;
	var apellido =document.getElementById("txtApellido").value;
	var email =document.getElementById("txtEmail").value;
	var NueContraseña =document.getElementById("txtPassword").value;
	var ReNueContraseña =document.getElementById("txtRePassword").value;
	var ImagenVar = imagen;
	if((nombre=="")||(apellido=="")||(email=="")||(NueContraseña=="")||(ReNueContraseña=="")
		||!(ImagenVar)){
			alert('[ERROR] Debe llenar todos los campos.');
			window.location="Registrarse.php";
			return false;
	}
	else if(validarTodosCampos(nombre,apellido,email,
	,NueContraseña,ReNueContraseña,ImagenVar)==true){
		return true;
	}
	else return false;

}
function validarTodosCampos(nombre,apellido,email,
	,NueContraseña,ReNueContraseña,ImagenVar){

var claveLength = NueContraseña.length;
	if(sololetras(nombre)==false){
		alert('[ERROR] El nombre debe ser escrito con letras.');
		return false;
	}
	else if (sololetras(apellido)==false){
		alert("[ERROR] El Apellido debe ser escrito con letras");
		return false;
		}
	else if  (validarEmailLetras(email)==false){
		alert("[ERROR] Debe ser un Email valido.");
		return false;
		}
	else if((claveLength<6)||(ValidarContraseña(NueContraseña)==false)){
			alert('[ERROR] La contraseña debe tener por lo menos 6 caracteres y debe ser escrito con letras mayuculas, minusculas y numeros o algunos de estos caracteres @#%&-_.;:');
			return false;
		}
	else if (!(NueContraseña==ReNueContraseña)) {
			alert('[ERROR] Las claves no coinciden.');
			return false;
	}
	//si llega hasta aca, todo esta bien y retorna true para validar en php
	else {return true;}
}

function sololetras(cadenaAhora){
	var filter6=/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;

	if (filter6.test(cadenaAhora)){
return true;
}
else{
return false;
}

}


function validarEmailLetras(clave)
{

	var nCaracter = 0;
	var t3 = "@";
	var cla=clave.length;
	for (i=0;i<clave.length;i++) {
		if ( t3.indexOf(clave.charAt(i)) != -1 ) nCaracter++;
	}
	if ( nCaracter==0 )
	{
		return false;
	}
	else return true;
}

function Numeros_Letras(clave)
{
	var nLetra = 0, nNum = 0;
	var t1 = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz";
	var t3 = "0123456789@#%&-_.;:";
	for (i=0;i<clave.length;i++) {
		if ( t1.indexOf(clave.charAt(i)) != -1 ) nLetra++;
		if ( t3.indexOf(clave.charAt(i)) != -1 ) nNum++;
	}
	if ( (nLetra==0) || (nNum==0) )
	{
		return false;
	}
	else return true;
}
function ValidarContraseña(clave)
{

	var nMay = 0, nMin = 0, nNum = 0;
	var t1 = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	var t2 = "abcdefghijklmnñopqrstuvwxyz";
	var t3 = "0123456789@#%&-_.;:";
	var cla=clave.length;
	for (i=0;i<clave.length;i++) {
		if ( t1.indexOf(clave.charAt(i)) != -1 ) nMay++;
		if ( t2.indexOf(clave.charAt(i)) != -1 ) nMin++;
		if ( t3.indexOf(clave.charAt(i)) != -1 ) nNum++;
	}
	if ( (nMay==0) || (nMin==0) || (nNum==0) )
	{
		return false;
	}
	else return true;
}
