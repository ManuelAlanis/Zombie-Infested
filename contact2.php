<?php
$nameErr = $emailErr = $apellidoErr = $telefonoErr =$edadErr = "";
$name1Err = $email1Err = $apellido1Err = $telefono1Err =$edad1Err = "";
$name2Err = $email2Err = $apellido2Err = $telefono2Err =$edad2Err = "";
$name3Err = $email3Err = $apellido3Err = $telefono3Err =$edad3Err = "";
$nameEErr = "";


$nombre = $apellido = $email = $telefono = $edad = $sexo = "";
$nombre1 = $apellido1 = $email1 = $telefono1 = $edad1 = $sexo1 = "";
$nombre2 = $apellido2 = $email2 = $telefono2 = $edad2 = $sexo2 = "";
$nombre3 = $apellido3 = $email3 = $telefono3 = $edad3 = $sexo3 = "";
$nombreE = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["Nombres"])){
		$nameErr = "Se ocupa un nombre";
	}
	else{
		$nombre = test_input($_POST["Nombres"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
       $nameErr = "Solo se permiten letras"; 
     	}
	 }
	 
	 
	 if(empty($_POST["Apellidos"])){
		$apellidoErr = "Se ocupa un Apellido";
	}
	else{
		$apellido = test_input($_POST["Apellidos"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) {
       $apellidoErr = "Solo se permiten letras"; 
     	}
	 }
	
	
	 if (empty($_POST["Email"])) {
     $emailErr = "Se ocupa un email";
   } else {
     $email = test_input($_POST["Email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Formato de email inválido";
     }
   }
	
	if(empty($_POST["Telefono"])){
		$telefonoErr = "Se ocupa un teléfono";
	}
	else{
	$telefono = test_input($_POST["Telefono"]);
	}
	
	if(empty($_POST["Edad"])){
		$edadErr="Se ocupa una edad";
	}else{
		$edad = test_input($_POST["Edad"]);
	}
	
	if(empty($_POST["Sexo"])){
	}
	else{
		$sexo = test_input($_POST["Sexo"]);		
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($nameErr =="" && $emailErr=="" && $apellidoErr =="" && $telefonoErr =="" && $edadErr == ""){
	$to = "andrewriting@gmail.com";
	$subject = "Formato de Contacto de CityCross";
	$from = "contact@citycross.com";
	$message =
		"Nombre del cliente:                         " . $_POST ['Nombres'] . "\r\n" .
		"Apellidos del cliente:                      " . $_POST ['Apellidos'] . "\r\n" .
		"Correo electronico:                         " . $_POST ['Email'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad'] . "\r\n" .
		"Sexo:                                       " . $_POST ['Sexo'] . "\r\n" .	
	
	$headers = "From: $from" . "\r\n";
	mail($to,$subject,$message,$headers);
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
	background-color: #FFFFFF;
	margin: 0;
	padding: 0;
	color: #000;
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
	height: 50px;
	color: #FFFFFF;
}
.title {
	width: 1100px;
	height: 50px;
	font-size: 14px;
	margin-top: 50px;
	color: #FFFFFF;
}
.form_container {
	width: 1050px;
	height: 1200px;
	margin-top: 25px;
	margin-left: 25px;
}
.field {
	width: 320px;
	height: 80px;
	float: left;
	margin-left: 20px;
	margin-top: 10px;
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
	background-color:#999;
	height:250px;
}

#segundointegrante{
	background-color:#0C6;
		height:250px;
}

#tercerintegrante{
	background-color:#999;
		height:250px;
}

#equipo{
	background-color:#0C6;
		height:250px;
}

#nombreequipo input{
	margin-left: 18px;
	line-height: inherit;
	font-size: inherit;
	width: 500px;
	color: #720908;
}


-->
</style>
</head>

<body>
<div class="container clearfix">
  <div class="top_header">
    <div class="top_headerleft">
      <p style="font-size:10px; color:#FFF;margin-top:10px"> <a href="contact.php">ÚLTIMAS NOTICIAS</a>&nbsp;|&nbsp;<a href="contact.php">CONTÁCTANOS</a>&nbsp;|&nbsp;<a href="nosotros.html">MENSUALIDADES</a>&nbsp;|</p>
    </div>
    <div class="top_headerright">
      <p style="font-size:15px; color:#FFF;margin-top:8px; text-align:right">Teléfono: (664) 688 - 4750 
    </div>
  </div>
  <div class="header">
    <center>
      <img style="margin-top:8px" src="images/logo_header.png" width="232" height="118" alt="" />
    </center>
  </div>
  <div class="navbar_container">
    <div class="navbar">
      <ul>
        <li><a href="index.html">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</a></li>
        <li><a href="#">&nbsp;&nbsp;CONÓCENOS&nbsp;&nbsp;</a></li>
        <li><a href="#">&nbsp;&nbsp;EQUIPO Y GIMNASIO&nbsp;&nbsp;</a></li>
        <li><a href="contact2.php">&nbsp;&nbsp;CONTACTO&nbsp;&nbsp;</a></li>
      </ul>
    </div>
  </div>
  <div class="title">
    <center>
      <h2>PRE-REGISTRO SÓLO DEL 1 AL 17 DE JULIO 300 PESOS POR EQUIPO</h2>
    </center>
    <center>
      <h4>TODOS LOS CAMPOS SON REQUERIDOS</h4>
    </center>
  </div>
  <div class="form_container"> <span style="color:#FFFFFF">
    <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($nameErr =="" && $emailErr=="" && $apellidoErr =="" && $telefonoErr =="" && $edadErr == ""){
	print"<p>&nbsp;</p>
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  </span>
  ";}}?>
    <p>&nbsp;</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div id="nombreequipo">
      <h3>NOMBRE DEL EQUIPO
        <input type="text" name="Nombres2" placeholder="NOMBRE DEL EQUIPO" required value="<?php echo $nombreE;?>" />
      </h3>
      <p> <?php echo $nameEErr;?> </p>
      </div>
      
      
      <div id="primerintegrante">
        <h3>PRIMER INTEGRANTE - CAPITÁN</h3>
        <div class="field">
          <h4>NOMBRES:</h4>
          <input type="text" name="Nombres1" placeholder="NOMBRES" required value="<?php echo $nombre1;?>">
          <p> <?php echo $name1Err;?> </p>
        </div>
        <div class="field">
          <h4>APELLIDOS:</h4>
          <input type="text" name="Apellidos1" placeholder="APELLIDOS" required value="<?php echo $apellido1;?>">
          <p><?php echo $apellido1Err;?></p>
        </div>
        <div class="field">
          <h4>EMAIL:</h4>
          <input type="text" name="Email1" placeholder="EMAIL" required="required" value="<?php echo $email1;?>">
          <p><?php echo $email1Err;?></p>
        </div>
        <div class="field">
          <h4>TELÉFONO:</h4>
          <input type="text" name="Telefono1" placeholder="TELÉFONO" required="required" value="<?php echo $telefono1;?>">
          <p><?php echo $telefono1Err;?></p>
        </div>
        <div class="field">
          <h4>EDAD:</h4>
          <input type="text" name="Edad1" placeholder="EDAD" required="required" value="<?php echo $edad1;?>">
          <p><?php echo $edad1Err;?></p>
        </div>
        <div class="field">
          <h4>SEXO:</h4>
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
        <h3>SEGUNDO INTEGRANTE</h3>
        <div class="field">
          <h4>NOMBRES:</h4>
          <input type="text" name="Nombres2" placeholder="NOMBRES" required value="<?php echo $nombre2;?>">
          <p> <?php echo $name2Err;?> </p>
        </div>
        <div class="field">
          <h4>APELLIDOS:</h4>
          <input type="text" name="Apellidos2" placeholder="APELLIDOS" required value="<?php echo $apellido2;?>">
          <p><?php echo $apellido2Err;?></p>
        </div>
        <div class="field">
          <h4>EMAIL:</h4>
          <input type="text" name="Email2" placeholder="EMAIL" required="required" value="<?php echo $email2;?>">
          <p><?php echo $email2Err;?></p>
        </div>
        <div class="field">
          <h4>TELÉFONO:</h4>
          <input type="text" name="Telefono2" placeholder="TELÉFONO" required="required" value="<?php echo $telefono2;?>">
          <p><?php echo $telefono2Err;?></p>
        </div>
        <div class="field">
          <h4>EDAD:</h4>
          <input type="text" name="Edad2" placeholder="EDAD" required="required" value="<?php echo $edad2;?>">
          <p><?php echo $edad2Err;?></p>
        </div>
        <div class="field">
          <h4>SEXO:</h4>
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
        <h3>TERCER INTEGRANTE</h3>
        <div class="field">
          <h4>NOMBRES:</h4>
          <input type="text" name="Nombres3" placeholder="NOMBRES" required value="<?php echo $nombre3;?>">
          <p> <?php echo $name3Err;?> </p>
        </div>
        <div class="field">
          <h4>APELLIDOS:</h4>
          <input type="text" name="Apellidos3" placeholder="APELLIDOS" required value="<?php echo $apellido3;?>">
          <p><?php echo $apellido3Err;?></p>
        </div>
        <div class="field">
          <h4>EMAIL:</h4>
          <input type="text" name="Email3" placeholder="EMAIL" required="required" value="<?php echo $email3;?>">
          <p><?php echo $email3Err;?></p>
        </div>
        <div class="field">
          <h4>TELÉFONO:</h4>
          <input type="text" name="Telefono3" placeholder="TELÉFONO" required="required" value="<?php echo $telefono3;?>">
          <p><?php echo $telefono3Err;?></p>
        </div>
        <div class="field">
          <h4>EDAD:</h4>
          <input type="text" name="Edad3" placeholder="EDAD" required="required" value="<?php echo $edad3;?>">
          <p><?php echo $edad3Err;?></p>
        </div>
        <div class="field">
          <h4>SEXO:</h4>
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
        <h3>DATOS DEL EQUIPO</h3>
        <div class="field">
          <h4>TALLA PRIMER INTEGRANTE</h4>
          <select name="Talla1">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select>
        </div>
        <div class="field">
          <h4>TALLA SEGUNDO INTEGRANTE</h4>
        <select name="Talla2">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select></div>
        <div class="field">
          <h4>TALLA TERCER INTEGRANTE</h4>
        <select name="Talla3">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
          </select>
          </div>
        <div class="field">
          <h4>COLOR PRIMER INTEGRANTE</h4>
          <select name="Color1">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <div class="field">
          <h4>COLOR SEGUNDO INTEGRANTE</h4>
      <select name="Color2">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <div class="field">
          <h4>COLOR TERCER INTEGRANTE</h4>
          <select name="Color3">
            <option value="roja">Roja</option>
            <option value="negra">Negra</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
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
    </center>
  </div>
</div>

<!-- end .container -->
</div>
</body>
</html>
