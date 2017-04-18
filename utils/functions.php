<?php

function generaPass(){
    //Se define una cadena de caractares. Te recomiendo que uses esta.
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    //Obtenemos la longitud de la cadena de caracteres
    $longitudCadena=strlen($cadena);

    //Se define la variable que va a contener la contraseña
    $pass = "";
    //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
    $longitudPass=30;

    //Creamos la contraseña
    for($i=1 ; $i<=$longitudPass ; $i++){
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos=rand(0,$longitudCadena-1);

        //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
        $pass .= substr($cadena,$pos,1);
    }
    return $pass;
}
function comprobar_email($email){ 
   	$mail_correcto = 0;
   	//compruebo unas cosas primeras
   	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
      	if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
         	//miro si tiene caracter .
         	if (substr_count($email,".")>= 1){
            	//obtengo la terminacion del dominio
            	$term_dom = substr(strrchr ($email, '.'),1);
            	//compruebo que la terminación del dominio sea correcta
            	if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
               	//compruebo que lo de antes del dominio sea correcto
               	$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
               	$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
               	if ($caracter_ult != "@" && $caracter_ult != "."){
                  	$mail_correcto = 1;
               	}
            	}
         	}
      	}
   	}
   	if ($mail_correcto)
      	return 1;
   	else
      	return 0;
}

?>
