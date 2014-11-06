<?php
$name1Err = $email1Err = $apellido1Err = $telefono1Err =$edad1Err = "";
$control=0;

$nombre = $apellido = $email = $telefono = $edad = $sexo = "";
$nombre1 = $apellido1 = $email1 = $telefono1 = $edad1 = $sexo1 = "";
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
	
	
}
	
	
	
	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == ""){
			
	$to = "man.alaniz@gmail.com,"."rrangel@uabc.edu.mx,"."zombieinfested.tijuana@gmail.com";
	$subject = "Formato Zombie Infested de CityCross";
	$from = "contact@citycross.com";
	$message =
		
		"Nombre del Equipo:                          " . $_POST['NombreE'] . "\r\n".
		"Datos del Participante                      " . "\r\n".
		"\r\n".
		"Nombre:                                     " . $_POST['Nombres1'] . "\r\n".
		"Apellido:                                   " . $_POST['Apellidos1'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad1'] . "\r\n" .
		"Sexo:                                       " . $_POST ['Sexo1'] . "\r\n" .	
		"Correo electronico:                         " . $_POST ['Email1'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono1'] . "\r\n" .
		"Talla de playera:                           " . $_POST['Talla1'] . "\r\n" .
		"\r\n" .
		"\r\n" .
	
	$headers = "From: $from" . "\r\n";
	
	
	$tor = $_POST ['Email1'];
	$subjectr = "Confirmacion Inscripcion en Zombie Infested de CityCross";
	$fromr = "contact@citycross.com";
	$messager =
		"Muchas gracias por inscribirte en la carrera Zombie Infested." . "\r\n".
		"Mantente informado sobre los puntos de venta en https://www.facebook.com/ZombieInfestedTijuana?fref=ts" . "\r\n".
		"Este registro es para dar prioridad en la asignación de camisas" . "\r\n".
		"Datos del Participante                      " . "\r\n".
		"\r\n".
		"Nombre:                                     " . $_POST['Nombres1'] . "\r\n".
		"Apellido:                                   " . $_POST['Apellidos1'] . "\r\n" .
		"Edad:                                       " . $_POST ['Edad1'] . "\r\n" .
		"Género:                                     " . $_POST ['Sexo1'] . "\r\n" .	
		"Correo electronico:                         " . $_POST ['Email1'] . "\r\n" .
		"Teléfono:                                   " . $_POST ['Telefono1'] . "\r\n" .
		"Talla de playera:                           " . $_POST['Talla1'] . "\r\n" .
		"\r\n" .
		"\r\n" .
	
	$headersr = "From: $from" . "\r\n";
	
	mail($tor,$subjectr,$messager,$headersr);
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
<title>Resgistro | Zombie Infested</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	color: #000;
	background-color: black;
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
    <div class="top_headerleft">       <p style="font-size:10px; color:#FFF;margin-top:10px"> <a href="http://citycross.com.mx/">INICIO</a>&nbsp;&nbsp;&nbsp;|</p>
    </div>
    <div class="top_headerright">
      <p style="font-size:16px; color:#FFF;margin-top:8px; text-align:right">Teléfono:  664-174-5204
    </div>
  </div>
  <div class="navbar_container">
    <div class="navbar">      <ul>
       
        
      </ul>
      </div>
  </div>
  <div id="event">
    <span style="color:#FFFFFF">  <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == ""){

	print"<p>&nbsp;</p>
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  ";}}?></span>
  <img src="images/flyer-03grande.png" width="1100" height="1183" alt="" />
  <div id="inscripcion">
  <center><h3>INSCRIBIRME</h3></center>
  </div>
  <div href="https://zombieinfested.boletia.com/">
<center><h2 style="color:white" target="_blank"href="https://zombieinfested.boletia.com/">COMPRAR BOLETOS</h2></center>  
  </div>
  </div>
  
  <div class="title">
  <p>&nbsp;</p>
    <center>
      <h2>PRE-REGISTRO SÓLO DEL 12 DE SEPTIEMBRE AL 7 DE NOVIEMBRE COSTO 150.00 M.N.</h2>
    </center>
    <center>
    <h4>SÓLO LOS PRIMEROS 500 INSCRITOS RECIBEN PLAYERA</h4>
      <h4>TODOS LOS CAMPOS SON REQUERIDOS</h4>
    </center>
  </div>
  <div class="form_container"> <span style="color:#FFFFFF">
    <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($name1Err =="" && $email1Err=="" && $apellido1Err =="" && $telefono1Err =="" && $edad1Err == ""){
	print"<p>&nbsp;</p>
  <p>Muchas gracias, tu mensaje fue enviado exitosamente. En menos de 24 horas recibiras un mensaje en tu correo confirmando tu inscripción</p>
  </center>
  </span>
  ";}}?>
    <p>&nbsp;</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div id="primerintegrante">
        <p>&nbsp;</p>
        <p>DATOS DEL PARTICIPANTE</p>
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
          <p>GÉNERO:</p>
          <select name="Sexo1">
            <option value="Masculino">Hombre</option>
            <option value="Femenino">Mujer</option>
          </select>
        </div>
        <p>&nbsp;</p>
      </div>
      <div id="equipo">
      <div class="separator">
      <p>&nbsp;</p>
      </div>
        <p>DATOS DE LA CAMISA</p>
        <div class="field">
          <p>TALLA CAMISA</p>
          <select name="Talla1">
            <option value="small">Pequeña/Small</option>
            <option value="medium">Mediana/Medium</option>
            <option value="large">Grande/Large</option>
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
