<?php
$nameErr = $emailErr = $apellidoErr = $telefonoErr =$edadErr = "";
$name1Err = $email1Err = $apellido1Err = $telefono1Err =$edad1Err = "";
$name2Err = $email2Err = $apellido2Err = $telefono2Err =$edad2Err = "";
$name3Err = $email3Err = $apellido3Err = $telefono3Err =$edad3Err = "";
$nameEErr = "";
$control=0;


$nombre = $apellido = $email = $telefono = $edad = $sexo = "";
$nombre1 = $apellido1 = $email1 = $telefono1 = $edad1 = $sexo1 = "";
$nombre2 = $apellido2 = $email2 = $telefono2 = $edad2 = $sexo2 = "";
$nombre3 = $apellido3 = $email3 = $telefono3 = $edad3 = $sexo3 = "";
$nombreE = "";

$talla1= $talla2 = $talla3 = $color1 = $color2 = $color3 = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["Nombres1"])){
		$name1Err = "*";
	}
	else{
		$nombre1 = test_input($_POST["Nombres1"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nombre1)) {
       $name1Err = "Solo se permiten letras"; 
     	}
	 }
	 
	 if(empty($_POST["NombreE"])){
		$nameEErr = "Se ocupa un nombre de Equipo";
	}
	else{
		$nombreE = test_input($_POST["NombreE"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nombreE)) {
       $nameEErr = ""; 
     	}
	 }
	 
	 
	 
	 if(empty($_POST["Apellidos1"])){
		$apellido1Err = "Se ocupa un Apellido";
	}
	else{
		$apellido1 = test_input($_POST["Apellidos1"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$apellido1)) {
       $apellido1Err = "Solo se permiten letras"; 
     	}
	 }
	
	
	 if (empty($_POST["Email1"])) {
     $email1Err = "Se ocupa un email";
   } else {
     $email1 = test_input($_POST["Email1"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email1)) {
       $email1Err = "Formato de email inválido";
     }
   }
	
	if(empty($_POST["Telefono1"])){
		$telefono1Err = "Se ocupa un teléfono";
	}
	else{
	$telefono1 = test_input($_POST["Telefono1"]);
	}
	
	if(empty($_POST["Edad1"])){
		$edad1Err="Se ocupa una edad";
	}else{
		$edad1 = test_input($_POST["Edad1"]);
	}
	
	if(empty($_POST["Sexo1"])){
	}
	else{
		$sexo1 = test_input($_POST["Sexo1"]);		
	}
	
	
	
	
	
	
	
	//Insertar segundo miembro
	
	if(empty($_POST["Nombres2"])){
		$name2Err = "Se ocupa un nombre";
	}
	else{
		$nombre2 = test_input($_POST["Nombres2"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nombre2)) {
       $name2Err = "Solo se permiten letras"; 
     	}
	 }
	 
	 
	 if(empty($_POST["Apellidos2"])){
		$apellido2Err = "Se ocupa un Apellido";
	}
	else{
		$apellido2 = test_input($_POST["Apellidos2"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$apellido2)) {
       $apellido2Err = "Solo se permiten letras"; 
     	}
	 }
	
	
	 if (empty($_POST["Email2"])) {
     $email2Err = "Se ocupa un email";
   } else {
     $email2 = test_input($_POST["Email2"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email2)) {
       $email2Err = "Formato de email inválido";
     }
   }
	
	if(empty($_POST["Telefono2"])){
		$telefono2Err = "Se ocupa un teléfono";
	}
	else{
	$telefono2 = test_input($_POST["Telefono2"]);
	}
	
	if(empty($_POST["Edad2"])){
		$edad2Err="Se ocupa una edad";
	}else{
		$edad2 = test_input($_POST["Edad2"]);
	}
	
	if(empty($_POST["Sexo2"])){
	}
	else{
		$sexo2 = test_input($_POST["Sexo2"]);		
	}
	
	
	
	
	
	
	
	
	
	
	//Insertar tercer miembro
	
	if(empty($_POST["Nombres3"])){
		$name3Err = "Se ocupa un nombre";
	}
	else{
		$nombre3 = test_input($_POST["Nombres3"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nombre3)) {
       $name3Err = "Solo se permiten letras"; 
     	}
	 }
	 
	 
	 if(empty($_POST["Apellidos3"])){
		$apellido3Err = "Se ocupa un Apellido";
	}
	else{
		$apellido3 = test_input($_POST["Apellidos3"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$apellido3)) {
       $apellido3Err = "Solo se permiten letras"; 
     	}
	 }
	
	
	 if (empty($_POST["Email3"])) {
     $email3Err = "Se ocupa un email";
   } else {
     $email3 = test_input($_POST["Email3"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email3)) {
       $email3Err = "Formato de email inválido";
     }
   }
	
	if(empty($_POST["Telefono3"])){
		$telefono3Err = "Se ocupa un teléfono";
	}
	else{
	$telefono3 = test_input($_POST["Telefono3"]);
	}
	
	if(empty($_POST["Edad3"])){
		$edad3Err="Se ocupa una edad";
	}else{
		$edad3 = test_input($_POST["Edad3"]);
	}
	
	if(empty($_POST["Sexo3"])){
	}
	else{
		$sexo3 = test_input($_POST["Sexo3"]);		
	}
	
	
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $nameEErr =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == "" &&$name2Err =="" && $email2Err=="" && $apellido2Err =="" && $telefono2Err =="" && $edad2Err == ""&& $name3Err =="" && $email3Err=="" && $apellido3Err =="" && $telefono3Err =="" && $edad3Err == ""){
			
	$to = "andrewriting@gmail.com,"."rrangel@uabc.edu.mx";
	$subject = "Formato de Contacto de CityCross";
	$from = "contact@citycross.com";
	$message =
		
		"Nombre del Equipo:                          " . $_POST['NombreE'] . "\r\n".
		"Datos del Primer Integrante (Capitan)       " . "\r\n".
		"\r\n".
		"Nombre:                                     " . $_POST['Nombres1'] . "\r\n".
		"Apellido:                                   " . $_POST['Apellidos1'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad1'] . "\r\n" .
		"Sexo:                                       " . $_POST ['Sexo1'] . "\r\n" .	
		"Correo electronico:                         " . $_POST ['Email1'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono1'] . "\r\n" .
		"Talla de playera:                           " . $_POST['Talla1'] . "\r\n" .
		"Color de playera:                           " . $_POST['Color1'] . "\r\n" .
		"\r\n" .
		"\r\n" .
		"Datos del Segundo Integrante                " . "\r\n"   .
		"Nombre:                                     " . $_POST['Nombres2'] . "\r\n".
		"Apellido:                                   " . $_POST['Apellidos2'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad2'] . "\r\n" .
		"Sexo:                                       " . $_POST ['Sexo2'] . "\r\n" .	
		"Correo electronico:                         " . $_POST ['Email2'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono2'] . "\r\n" .
		"Talla de playera:                           " . $_POST['Talla2'] . "\r\n" .
		"Color de playera:                           " . $_POST['Color2'] . "\r\n" .
		"\r\n" .
		"\r\n" .
		"Datos del Tercer Integrante                " . "\r\n"   .
		"Nombre:                                     " . $_POST['Nombres3'] . "\r\n".
		"Apellido:                                   " . $_POST['Apellidos3'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad3'] . "\r\n" .
		"Sexo:                                       " . $_POST ['Sexo3'] . "\r\n" .	
		"Correo electronico:                         " . $_POST ['Email3'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono3'] . "\r\n" .
		"Talla de playera:                           " . $_POST['Talla3'] . "\r\n" .
		"Color de playera:                           " . $_POST['Color3'] . "\r\n" .
		"\r\n" .
		"\r\n" .
		
		
		
	
	$headers = "From: $from" . "\r\n";
	mail($to,$subject,$message,$headers);
}

else{
	$control=1;
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CityCross - Contacto</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	color: #000;
	background-image:url(images/background/dark_wall2.jpg);
	background-attachment:fixed;
}
/* new clearfix */
.clearfix:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}
* html .clearfix {
	zoom: 1;
} /* IE6 */
*:first-child+html .clearfix {
	zoom: 1;
} /* IE7 */
ul {
	margin: 0;
	padding: 0;
	list-style: none;
	font-size: 14px;
}
ul li {
	float: left;
	width: auto;
	height: auto;
	padding-top: 8px;
	padding-bottom: 8px;
	margin-left: 10px;
	text-align: center;
}
ul li a {
	text-decoration: none;
	color: #FFFFFF;
}
ul li:hover {
	background-color: #999;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;
	padding-right: 15px;
	padding-left: 15px;
}
a img {
	border: none;
}
.container {
	width: 1100px;
	background-color: #000;
	margin: 0 auto;
}
.separator {
	width: 1100px;
	height: 20px;
	clear: both;
}
.top_header {
	width: 1100px;
	height: 30px;
	background-color: #2F2F2F;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #0E0E0E;
}
.top_headerleft {
	width: 400px;
	height: 30px;
	margin-left: 10px;
	float: left;
}
.top_headerleft p a {
	color: #FFFFFF;
	text-decoration: none;
}
.top_headerleft p a:hover {
	background-color: #999;
}
.top_headerright {
	width: 400px;
	height: 30px;
	margin-right: 10px;
	float: right;
}
.header {
	width: 1100px;
	height: 130px;
	background-color: #FFFFFF;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #9e2121;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #0E0E0E;
}
.navbar_container {
	width: 1100px;
	height: 40px;
	background-color: #720908;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #9e2121;
}
.navbar {
	width: 1100px;
	height: 40px;
}
.footer {
	background-color: #4A4A4A;
	width: 1100px;
	height: 75px;
	color: #FFFFFF;
}
.title {
	width: 1100px;
	height: 50px;
	font-size: 14px;
	margin-top: 50px;
	color: #FFFFFF;
	display:none;
}
.form_container {
	width: 1050px;
	height: 1300px;
	margin-top: 25px;
	margin-left: 25px;
	font-family:Impact, arial, tahoma;
	display:none;
}
.field {
	width: 320px;
	height: 90px;
	float: left;
	margin-left: 20px;
	color: #FFF;
}
.field h4 {
	margin-bottom: 5px;
}
.field input {
	margin-left: 18px;
	line-height: inherit;
	font-size: inherit;
	width: 250px;
	color: #720908;
}
.field select {
	margin-left: 18px;
	line-height: inherit;
	font-size: inherit;
	width: 250px;
	color: #720908;
}
.button input {
	width: 275px;
	height: 50px;
	background-color: #E74350;
	font-size: 18px;
	margin-top: 15px;
	border: 2px solid;
	border-radius: 10px;
	letter-spacing: 2px;
	cursor: pointer;
}
.error {
	widht: 100px;
	height: 25px;
}

#primerintegrante{
	height: 275px;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #FFF;
}



#segundointegrante{
	height: 275px;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #666;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #FFF;
}



#tercerintegrante{
	height: 275px;
	border-top-width: 1px;
	border-bottom-width: 2px;
	border-top-style: solid;
	border-bottom-style: solid;
	border-top-color: #000;
	border-bottom-color: #FFF;
}

#equipo{
		height:275px;
}

#nombreequipo input{
	margin-left: 18px;
	line-height: inherit;
	font-size: inherit;
	width: 500px;
	color: #720908;
}

#nombreequipo{
	background-color:#720908;
	height:50px;
	padding-top:25px;
}

form p{
	letter-spacing:2px;
}

#inscripcion{
	width:1100px;
	height:50px;
	cursor:pointer;
	margin-top:25px;
}

#inscripcion h3{
	color: #FFFFFF;
}

#inscripcion h3:hover{
	color: #E74350;
}

#event{
	width:1100px;
	height:700px;
}


-->
</style>
</head>

<body>
<div class="container clearfix">
  <div class="top_header">
    <div class="top_headerleft">       <p style="font-size:10px; color:#FFF;margin-top:10px"> <a href="contact.php">ÚLTIMAS NOTICIAS</a>&nbsp;|&nbsp;<a href="contact.php">CONTÁCTANOS</a>&nbsp;|&nbsp;<a href="nosotros.html">MENSUALIDADES</a>&nbsp;|</p>
    </div>
    <div class="top_headerright">
      <p style="font-size:16px; color:#FFF;margin-top:8px; text-align:right">Teléfono:  664-174-5204
    </div>
  </div>
  <div class="header">
    <center>
      <a href="index.php"><img style="margin-top:8px" src="images/logo_header.png" width="235" height="120" alt="" /></a>
    </center>
  </div>
  <div class="navbar_container">
    <div class="navbar">      <ul>
        <li><a href="index.php">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</a></li>
        <li><a href="nosotros.html">&nbsp;&nbsp;CONÓCENOS&nbsp;&nbsp;</a></li>
       <li><a href="contact.php">&nbsp;&nbsp;EVENTOS&nbsp;&nbsp;</a></li>
        
      </ul>
      </div>
  </div>
  <div id="event">
    <span style="color:#FFFFFF">  <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $nameEErr =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == ""){
	if ($name2Err =="" && $email2Err=="" && $apellido2Err =="" && $telefono2Err =="" && $edad2Err == ""){
		if ($name3Err =="" && $email3Err=="" && $apellido3Err =="" && $telefono3Err =="" && $edad3Err == ""){

	print"<p>&nbsp;</p>
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  ";}}}}?></span>
  <img src="images/evento2.png" width="1100" height="621" alt="" />
  <div id="inscripcion">
  <center><h3>INSCRIBIR A MI EQUIPO</h3></center>
  </div>
  </div>
  
  <div class="title">
  <p>&nbsp;</p>
    <center>
      <h2>PRE-REGISTRO SÓLO DEL 1 AL 18 DE JULIO 250 PESOS POR EQUIPO</h2>
    </center>
    <center>
    <h4>SÓLO LOS PRIMEROS 20 EQUIPOS TIENEN CAMISETA</h4>
      <h4>TODOS LOS CAMPOS SON REQUERIDOS</h4>
    </center>
  </div>
  <div class="form_container"> <span style="color:#FFFFFF">
    <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $nameEErr =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == ""){
	if ($name2Err =="" && $email2Err=="" && $apellido2Err =="" && $telefono2Err =="" && $edad2Err == ""){
		if ($name3Err =="" && $email3Err=="" && $apellido3Err =="" && $telefono3Err =="" && $edad3Err == ""){

	print"<p>&nbsp;</p>
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  </span>
  ";}}}}?>
    <p>&nbsp;</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div id="nombreequipo">
      <center><p>NOMBRE DEL EQUIPO:<input type="text" name="NombreE" placeholder="NOMBRE DEL EQUIPO" required value="<?php echo $nombreE;?>" />
        <?php echo $nameEErr;?></p></center>
      <p>&nbsp;</p>
      </div>
      
      
      <div id="primerintegrante">
        <p>&nbsp;</p>
        <p>PRIMER INTEGRANTE - CAPITÁN</p>
        <div class="field">
          <p>NOMBRE:</p>
          <input type="text" name="Nombres1" placeholder="NOMBRES" required value="<?php echo $nombre1;?>">
          <?php echo $name1Err;?><span>
          <p>&nbsp;</p></span>
        </div>
        <div class="field">
          <p>APELLIDO:</p>
          <input type="text" name="Apellidos1" placeholder="APELLIDOS" required value="<?php echo $apellido1;?>">
          <p><?php echo $apellido1Err;?></p>
        </div>
        <div class="field">
          <p>EMAIL:</p>
          <input type="text" name="Email1" placeholder="EMAIL" required="required" value="<?php echo $email1;?>">
          <p><?php echo $email1Err;?></p>
        </div>
        <div class="field">
          <p>TELÉFONO:</p>
          <input type="text" name="Telefono1" placeholder="TELÉFONO" required="required" value="<?php echo $telefono1;?>">
          <p><?php echo $telefono1Err;?></p>
        </div>
        <div class="field">
          <p>EDAD:</p>
          <input type="text" name="Edad1" placeholder="EDAD" required="required" value="<?php echo $edad1;?>">
          <p><?php echo $edad1Err;?></p>
        </div>
        <div class="field">
          <p>SEXO:</p>
          <select name="Sexo1">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
      <!-- space segundo integrante -->
      <div id="segundointegrante">
        <div class="separator">
          <p>&nbsp;</p>
        </div>
        <p>SEGUNDO INTEGRANTE</p>
        <div class="field">
          <p>NOMBRE:</p>
          <input type="text" name="Nombres2" placeholder="NOMBRES" required value="<?php echo $nombre2;?>">
          <center><p> <?php echo $name2Err;?> </p></center>
        </div>
        <div class="field">
          <p>APELLIDO:</p>
          <input type="text" name="Apellidos2" placeholder="APELLIDOS" required value="<?php echo $apellido2;?>">
          <p><?php echo $apellido2Err;?></p>
        </div>
        <div class="field">
          <p>EMAIL:</p>
          <input type="text" name="Email2" placeholder="EMAIL" required="required" value="<?php echo $email2;?>">
          <p><?php echo $email2Err;?></p>
        </div>
        <div class="field">
          <p>TELÉFONO:</p>
          <input type="text" name="Telefono2" placeholder="TELÉFONO" required="required" value="<?php echo $telefono2;?>">
          <p><?php echo $telefono2Err;?></p>
        </div>
        <div class="field">
          <p>EDAD:</p>
          <input type="text" name="Edad2" placeholder="EDAD" required="required" value="<?php echo $edad2;?>">
          <p><?php echo $edad2Err;?></p>
        </div>
        <div class="field">
          <p>SEXO:</p>
          <select name="Sexo2">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
      <div id="tercerintegrante"> 
        
        <!-- space TERCER integrante -->
        <div class="separator">
          <p>&nbsp;</p>
        </div>
        <p>TERCER INTEGRANTE</p>
        <div class="field">
          <p>NOMBRE:</p>
          <input type="text" name="Nombres3" placeholder="NOMBRES" required value="<?php echo $nombre3;?>">
          <p> <?php echo $name3Err;?> </p>
        </div>
        <div class="field">
          <p>APELLIDO:</p>
          <input type="text" name="Apellidos3" placeholder="APELLIDOS" required value="<?php echo $apellido3;?>">
          <p><?php echo $apellido3Err;?></p>
        </div>
        <div class="field">
          <p>EMAIL:</p>
          <input type="text" name="Email3" placeholder="EMAIL" required="required" value="<?php echo $email3;?>">
          <p><?php echo $email3Err;?></p>
        </div>
        <div class="field">
          <p>TELÉFONO:</p>
          <input type="text" name="Telefono3" placeholder="TELÉFONO" required="required" value="<?php echo $telefono3;?>">
          <p><?php echo $telefono3Err;?></p>
        </div>
        <div class="field">
          <p>EDAD:</p>
          <input type="text" name="Edad3" placeholder="EDAD" required="required" value="<?php echo $edad3;?>">
          <p><?php echo $edad3Err;?></p>
        </div>
        <div class="field">
          <p>SEXO:</p>
          <select name="Sexo3">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
      <div id="equipo">
      <div class="separator">
      <p>&nbsp;</p>
      </div>
        <p>DATOS DEL EQUIPO</p>
        <div class="field">
          <p>TALLA PRIMER INTEGRANTE</p>
          <select name="Talla1">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select>
        </div>
        <div class="field">
          <p>TALLA SEGUNDO INTEGRANTE</p>
        <select name="Talla2">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select></div>
        <div class="field">
          <p>TALLA TERCER INTEGRANTE</p>
        <select name="Talla3">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select>
          </div>
        <div class="field">
          <p>COLOR PRIMER INTEGRANTE</p>
          <select name="Color1">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <div class="field">
          <p>COLOR SEGUNDO INTEGRANTE</p>
      <select name="Color2">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <div class="field">
          <p>COLOR TERCER INTEGRANTE</p>
          <select name="Color3">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
      <p>&nbsp;</p>
      <div class="button">
        <center>
          <input type="submit" name="Submit" id="send" value="REGISTRAR">
        </center>
      </div>
    </form>
  </div>
  <div class="footer">
    <center>
      <p style="margin-top:20px">CityCross S.A. de C.V. todos los Derechos Reservados</p>
      <p>Teléfonos:  (664)-174-5204&nbsp;&nbsp;&nbsp; 664-342-9429&nbsp;&nbsp;Email: crossfitcity@gmail.com</p>
    </center>
  </div></div>

<!-- end .container -->
</div>

  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
  <script>
  $(document).ready(function() {
	  
	  var php_control = "<?php echo $control?>";
	  if (php_control==0){
		  $('#event').css({'display':'inline'});
	  }
	  else{
		  $('#event').css({'display':'none'});
		  $('.title').css({'display':'inline'});
		  $('.form_container').css({'display':'inline'});
		  
	  }
	  $('#inscripcion').click(function(){
		  $(this).css({'display':'none'});
		  $('#event').css({'display':'none'});
		  $('.title').css({'display':'inline'});
		  $('.form_container').css({'display':'inline'});
		  
		  
	  });
    
});
  
  
  </script>


</body>
</html>
