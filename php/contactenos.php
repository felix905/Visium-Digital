
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>



<title>Contactos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta name="generator" content="HAPedit 3.1">

<link rel="stylesheet" type="text/css" href="css/main.css">



<link rel="stylesheet" type="text/css" href="niftyCorners.css">

<link rel="stylesheet" type="text/css" href="niftyPrint.css" media="print">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="niftycube.js"></script>

<script type="text/javascript">

window.onload=function(){

/*Nifty("ul#nav a","small transparent top");

Nifty("div#tabla");*/

}



     

</script>

<script type="text/javascript" src="FormCheq.js"></script>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Oswald:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
</script>

<style type="text/css">

<!--

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:link {

	color: #003399;

}

a:visited {

	color: #003399;

}

a:hover {

	color: #0066CC;

}

a:active {

	color: #003399;

}
body,td,th {
}
.style10 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9pt;
	font-weight: bold;
}
.style12 {
	color: #333;
	font-family: 'Oswald', sans-serif;
	font-size: 16pt;
}

-->

</style>



</head>

<body>

<div id="contenido"><form method="post" action="contactenosEnvio.php" >

	<div id="tabla">

   <?php if(isset($output)) { echo $output; }?>
   <table  width="423" border="0" align="center" cellpadding="3" cellspacing="0" >    

    <tr>

          <td width="98"> <span class="style12">Nombre:</span></td>

      <td width="313"><label>

      <input type="text" name="nombre"   />

      </label></td>
	</tr>
    
    
     <tr>

          <td><span class="style12">Rif o CI:</span></td>

          <td><label>

        <input name="rif" type="text" id="rif" />

      </label></td>
    </tr>

	<tr>
	  
	  <td><span class="style12">Direccion:</span></td>
	  
	  <td><input type="text" name="empresa"/></td>
	  </tr>

    <tr>

          <td><span class="style12">Telefonos:</span></td>

          <td><label>

        <input name="telefono" type="text" id="telefono" />

      </label></td>
    </tr>
    
    
    <tr>

          <td><span class="style12">Email:</span></td>

          <td><label>

        <input name="email" type="text" id="email" />

      </label></td>
    </tr>
    
        <tr>

          <td><p class="style12">Persona de Contacto:</p>          </td>

          <td><label>

        <textarea name="persona" cols="30" rows="6" id="persona"/></textarea>

      </label></td>
    </tr>

    <tr>

    <tr>

          <td><p class="style12">Descripci&oacute;n:</p>          </td>

          <td><label>

        <textarea name="comentarios" cols="30" rows="6" id="comentarios"/></textarea>

      </label></td>
    </tr>

    <tr>
      
      <td >&nbsp;</td>
      
      <td valign="top"><label>        
        <input type="submit"  name="submit"value="Enviar" id="submit">
        
        <!--<input type="reset" name="Submit2" value="Cancelar" id="submit_2" />-->
        
        </label></td>
    </tr>
  </table>

    

 </div>



</form></div>

</body>

</html>