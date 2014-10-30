<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CityCross - Bienvenidos</title>
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
	background-color: #FFF;
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

.top_headerleft p a{
	color:#FFFFFF;
	text-decoration:none;
}

.top_headerleft p a:hover{
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
#banner {
	width: 1100px;
	height: 400px;
}
#banner_left {
	width: 50px;
	height: 400px;
	float: left;
	background-color: #E4E4E4;
	opacity: 0.3;
	cursor: pointer;
}
#banner_right {
	width: 50px;
	height: 400px;
	float: right;
	background-color: #E4E4E4;
	opacity: 0.3;
	cursor: pointer;
}

.footer {
	background-color: #4A4A4A;
	width: 1100px;
	height:75px;
	color: #FFFFFF;
}

.left{
	width:500px;
	height:850px;
	float:left;
	margin-left:50px;

}

.left img {
	float:left;
	opacity:0.85;
		cursor:pointer;
}

.right{
	width:500px;
	height:auto;
	float:left;
	margin-left:25px;
}

.title{
	background-color:#900;
	color:#FFF;
}

-->
</style>

<script type="text/javascript">
	//initialize the 3 popup css class names - create more if needed
	var matchClass=['popup1','popup2','popup3'];
	//Set your 3 basic sizes and other options for the class names above - create more if needed
	var popup1 = 'width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup2 = 'width=500,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup3 = 'width=1000,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	
	//The pop-up function
	function tfpop(){
			var x = 0;
			var popClass;
			//Cycle through the class names
			while(x < matchClass.length){
					popClass = "'."+matchClass[x]+"'";
					//Attach the clicks to the popup classes
					$(eval(popClass)).click(function() {
							//Get the destination URL and the class popup specs
							var popurl = $(this).attr('href');
							var popupSpecs = $(this).attr('class');
							//Create a "unique" name for the window using a random number
							var popupName = Math.floor(Math.random()*10000001);
							//Opens the pop-up window according to the specified specs
							newwindow=window.open(popurl,popupName,eval(popupSpecs));
							return false;
					});							
			x++;
			} 
	}
	
	//Wait until the page loads to call the function
	$(function() {
		tfpop();
	});
</script>
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
  
  <div class="separator">
    <p>&nbsp;</p>
  </div>
  
  <center><h2>Galería</h2></center>
  <div class="left">
  <div class="title">
  <center><h3>IMÁGENES</h3></center>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  <a class="popup2" href="images/evento_zombie.jpg"><img src="images/evento_zombie2.png" width="250" height="250" alt="" /></a>
  </div>
  </div>
  
  
  
  <div class="right">
  <div class="title">
  <center><h3>VIDEOS</h3></center>
  </div>
  <iframe src="//player.vimeo.com/video/103614035" width="500" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
    <iframe src="//player.vimeo.com/video/103614035" width="500" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
      <iframe src="//player.vimeo.com/video/103614035" width="500" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
  
  
  </div>  
  
  <div class="separator">
    <p>&nbsp;</p>
  </div>
  
  
  <div class="footer">
    <center>
      <p style="margin-top:20px">CityCross todos los Derechos Reservados</p>
      <p>Teléfonos:  (664)-174-5204&nbsp;&nbsp;&nbsp; 664-342-9429&nbsp;&nbsp;Email: crossfitcity@gmail.com</p>
    </center>
  </div>
  
  <!-- end .container --></div>
  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script>
$(document).ready(function(){	
	$('.left img').mouseenter(function(){
		$(this).css({'opacity':'1'});
		
	});
	$('.left img').mouseleave(function(){
		$(this).css({'opacity':'0.85'});
		
	});



});

</script>

  
  
</body>





</html>
