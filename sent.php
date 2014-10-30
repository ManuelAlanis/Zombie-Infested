<?php
if($_POST['Nombres']==""){
}
else{
$to = "andrewriting@gmail.com";
$subject = "Formato de contacto citycross.com.mx";
$message =
"Nombre del cliente:                         " . $_POST ['Nombres'] . "\r\n" .
"Apellidos del cliente:                      " . $_POST ['Apellidos'] . "\r\n" .
"Correo electronico:                         " . $_POST ['Email'] . "\r\n" .
"Teléfono:                                   " . $_POST ['Telefono'] . "\r\n" .
"Edad:                                       " . $_POST ['Edad'] . "\r\n" .
"Sexo:                                       " . $_POST ['Sexo'] . "\r\n" .

$from = $_POST ['Email'];
$headers = "From: $from" . "\r\n";
$headers .= "Bcc: goandy2@hotmail.com  " . "\r\n";
mail($to,$subject,$message,$headers);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CityCross - Bienvenidos</title>
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
	height: 500px;
	margin-top: 25px;
	margin-left: 25px;
}
.field {
	width: 320px;
	height: 80px;
	float: left;
	margin-left: 20px;
	margin-top: 25px;
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

.button input{
	width:150px;
	font-size:18px;
	margin-top:15px;
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
        <li><a href="#">&nbsp;&nbsp;INICIO&nbsp;&nbsp;</a></li>
        <li><a href="#">&nbsp;&nbsp;CONÓCENOS&nbsp;&nbsp;</a></li>
        <li><a href="#">&nbsp;&nbsp;EQUIPO Y GIMNASIO&nbsp;&nbsp;</a></li>
        <li><a href="#">&nbsp;&nbsp;CONTACTO&nbsp;&nbsp;</a></li>
      </ul>
    </div>
  </div>
  <div class="title">
    <center>
      <h2>PRE-REGISTRO SOLO DEL 1 AL 17 DE JULIO 300 PESOS POR EQUIPO</h2>
    </center>
    <center>
      <h4>TODOS LOS CAMPOS SON REQUERIDOS</h4>
    </center>
  </div>
  <div class="form_container">
  <span style="color:#FFFFFF">
  <p>&nbsp;</p>
  <p>&nbsp;</p>  
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  </span>
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
