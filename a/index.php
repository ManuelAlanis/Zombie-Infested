<?php
header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"')
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
.left {
	float: left;
	width: 300px;
	height: 600px;
	margin-left: 50px;
	margin-top: 25px;
}
.middle {
	float: left;
	width: 300px;
	height: 500px;
	margin-left: 50px;
	margin-top: 25px;
}
.middle img {
	margin-top: 20px;
}
.right {
	float: left;
	width: 300px;
	height: 400px;
	margin-left:50px;
	margin-top: 25px;
}
.right img {
	margin-top: 20px;
}
.title {
	background-color: #B20000;
	color: #FFFFFF;
	text-align: center;
}
.entry {
	background-color: #EEEEEE;
	color: #000;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #cccccc;
	font-size: 12px;
	padding-top: 10px;
	text-align:justify;
}
.footer {
	background-color: #4A4A4A;
	width: 1100px;
	height:75px;
	color: #FFFFFF;
}
#gallery {
	width: 300px;
	height: 200px;
	margin-top: 20px;
}



.article{
	font-size: 12px;
	background: rgba(0,0,0,0.1);
	width: 300px;
	height: 90px;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #000;
}

.article:hover{
	cursor:pointer;
	background: rgba(0,0,0,0.5);
}

.article p{
	margin-top:-5px;
	text-align:justify;
	padding-left:10px;
	
}

.article h4{
	padding-left:10px;

}

.article a{
	text-decoration:none;
	color:#000;
}


-->
</style>
</head>

<body>
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



<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{186982054657561}',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container clearfix">
  <div class="top_header">
    <div class="top_headerleft">
      <p style="font-size:10px; color:#FFF;margin-top:10px"> <a href="contact.php">ÚLTIMAS NOTICIAS</a>&nbsp;|&nbsp;<a href="contact.php">CONTÁCTANOS</a>&nbsp;|&nbsp;<a href="nosotros.html">MENSUALIDADES</a>&nbsp;|</p>
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
  <div id="banner">
  <a href="contact.php">
  <img id="banner_image" src="images/banner_event.jpg" width="1100" height="400" alt="" />
</a>
  </div>
  <div class="separator">
    <p>&nbsp;</p>
  </div>
  <div class="left">
    <div class="title">
      <h3>Síguenos en Facebook</h3>
    </div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcitycrosstijuana&amp;width=300&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:395px;" allowTransparency="true"></iframe>


  </div>

<div class="middle">
  <div class="title">
  <h3>EVENTOS</h3>
  </div>
  <a href="contact.php"><img src="images/flyer-03V2.png" width="300" height="323" alt="" /></a>
  
  </div>


  <div class="right">
    <div class="title">
      <h3>Galerías</h3>
    </div>
    <div id="gallery">
     <a href="galeria.php"><img src="images/search/foto1.png" width="300" height="200" id="gallery_image" /></a>
      
    </div>
    <p>&nbsp;</p>
  <a href="galeria.php"><img src="images/search/picture1.png" width="300" height="200" alt="" /></a> </div>
  <div class="separator">
    <p>&nbsp;</p>
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
  
</body>





</html>
