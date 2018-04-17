<?php
function validarLetras($pass){
	$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for ($i=0; $i<strlen($pass); $i++){
      if (strpos($permitidos, substr($pass,$i,1))===false){
         return false;
      }
	}
	return true;
}
function validaemail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
      return false;
	}
	else{
      return true;
   }
}
function validarContraseña($clave){
	if(strlen($clave) < 6){
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      return false;
   }
   $permitidos = "0123456789@#%&-_.;:";
	for($i=0;$i<strlen($clave);$i++){
		for($k=0;$k<strlen($permitidos);$k++){
			if($clave[$i]==$permitidos[$k])
			{
				return true;
			}
		}
	}
	if($i==0){
		return false;
	}
}
?>
