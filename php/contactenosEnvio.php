<?php

error_reporting(0);



function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars){	

		

	date_default_timezone_set('UTC');

	$dt = date("Y-m-d H:i:s (T)");

	$errortype = array (

		E_ERROR          =>'Error',

		E_WARNING        =>'Warning',

		E_PARSE          =>'Parsing Error',

		E_NOTICE         =>'Notice',

		E_CORE_ERROR     =>'Core Error',

		E_CORE_WARNING   =>'Core Warning',

		E_COMPILE_ERROR  =>'Compile Error',

		E_COMPILE_WARNING=>'Compile Warning',

		E_USER_ERROR     =>'User Error',

		E_USER_WARNING   =>'User Warning',

		E_USER_NOTICE    =>'User Notice',

		E_STRICT         =>'Runtime Notice'

	);



	

  $err="[{$errortype[$errno]}]: $dt -$errno- $errmsg =>$filename $linenum\n";

  

		echo $err."<br />\n";

	

    

				

}



	/**

	 * Use the function userErrorHandler to handle the errors and preserve tha last handler in $oldErrorHandler

	 */

$oldErrorHandler = set_error_handler('userErrorHandler');



if('POST'==$_SERVER['REQUEST_METHOD']){

 $err=false;

 $msgs = array();

 $_=array_map('trim',$_POST);

 if(!preg_match('/^[a-zA-ZñáéíóúäëïöüñÑÁÉÍÓÚÄËÏÖÜ ]{1,128}$/',$_['nombre'])){

 	$msgs[]='Por favor ingresa tus datos en el campo Nombre, solo letras y espacios.';

 	$err=true;

 }
 

 
  if(!preg_match('/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/',$_['rif'])){

 	$msgs[]='Debe ingresar su rif o CI';

 	$err=true;

 }

 if(!preg_match('/^[a-zA-ZñáéíóúäëïöüñÑÁÉÍÓÚÄËÏÖÜ ]{1,128}$/',$_['empresa'])){

 	$msgs[]='Por favor ingresa tus datos en el campo Direccion, solo letras y espacios.';

 	$err=true;

 }

 if(!preg_match('/^[0123456789-]{1,128}$/',$_['telefono'])){

 	$msgs[]='Asegurese de haber colocado caracteres v&aacute;lidos. El campo tel&eacute;fono no debe ser vac&iacute;o.';

 	$err=true;

 }
 
 
 if(128<strlen($_['email'])||!preg_match('/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/',$_['email'])){

 	$msgs[]='Debes ingresar tu direcci&oacute;n de correo electr&oacute;nico v&aacute;lida.';

 	$err=true;

 }

 if(!$err){

 	$msgs[]='Gracias por rellenar el formulario, Se ha enviado correctamente.';	

	$body = "Formulario enviado\n \n \n"

		. "Nombres: " . $_['nombre'] . "\n"

		. "Rif o I: " . $_['rif'] . "\n"

		. 'Direccion: ' . $_['empresa'] . "\n"

		. "Telefono: " . $_['telefono'] . "\n"

		. "Email: " . $_['email'] . "\n"
		
		. "Persona de contacto : " . $_['persona'] . "\n"

		. "Comentario o sugerencias:\n " . $_['comentarios'] . "\n\n\n";

	$eol="\r\n";

	$headers = 'From: Contacto Web<extinroy@cantv.net>'.$eol;

  $headers .= 'Reply-To: Info<extinroy@cantv.net>'.$eol;

  $headers .= 'Return-Path: Info<extinroy@cantv.net>'.$eol;    // these two to set reply address

  $headers .= "Message-ID: <". time() ." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol;

  $headers .= "X-Mailer: PHP v".phpversion().$eol;          // These two to help avoid spam-filters

	
	@mail("extinroy@gmail.com", "Contactenos", $body, $headers);  
	@mail("extinroy@cantv.net", "Contactenos", $body, $headers);  
	

	//mail('extinroy@gmail.com','extinroy@cantv.net','felixska311@gmail.com' ,
//	 "Contactenos",$body,$headers);

	}

	$output='<div align="center"><div align="left"><font color="#ffffff" face="Verdana, Helvetica, sans-serif" size="+1"><ul>';

	$lengh = count($msgs);

	for($i=0;$i<$lengh;++$i)$output.='<li>'.$msgs[$i].'</li>';

	$output.='</ul></font></div></div>';	

}

include ("contactenos.php");

?>







	

	






