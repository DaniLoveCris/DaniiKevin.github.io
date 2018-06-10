<?php
	session_start();
	
	if(isset($_SESSION['username']))
	{
		echo "Bienvenido/a ".$_SESSION['username'].", ";
	}
	else
	{
		echo " ";
	}	
?>

<html>
    <head>
        <title>Free Music Style ♀♂</title>
        <meta charset="utf-8" />        
		<link rel="shortcut icon" href="rec/musicc.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
	
		<!--contador de visitas-->
	
		<?php if(isset($_SESSION['username']))
		{
		?><span id="counter" >
			<?php include("contador.php"); ?>
		</span><?php } ?>

			 
	</head>
    <body>
		<div id="cabecera"><h1>FreeMusicStyle ♪♫♪♫</h1></div>
			
		<div id="menu">
		
			<p><a href="html/Generos.html"><b><big><big><big><big>Géneros</b></big></big></big></big></a></p>
			<p><a href="html/Artistas.html"><b><big><big><big><big>Artistas</b></big></big></big></big></a></p>
			<p><a href="html/Contactar.html"><b><big><big><big><big>Contactar</b></big></big></big></big></a></p>
			
				<!--reloj / PHP-->
		<iframe src="reloj/reloj.html" width="170px" height="50px" scrolling="no" frameborder="none" style="margin-top:30px;"></iframe>
		

				<!--Login-->
		<a href="login.php" target="_self" style="margin-top:30px;"> <input type="button" name="Login" value="Login" id="boton3" /> </a></p>
		<a href="registration.php" target="_self"> <input type="button" name="Registrar" value="Registrar" id="boton4" /> </a></p>
		<a href="logout.php" target="_self"> <input type="button" name="Salir" value="Salir" id="boton5"/> </a></p>
		
				
				<!--emisora radio-->
		<a href="http://www.emisora.org.es/#radio-maria-espana" target="_blank" style="margin-top:50px;"><img title="emisora" alt="emisora" src="rec/radio.png"../rec/ .jpg"" width="200" height="100"></a> </p>
		
			<h3>Daniel Rodríguez & Kevin García</h3></p>
			
				<!--Traductor-->
		</p><div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'cy', includedLanguages: 'ar,ca,de,en,es,fr,it,ja,pt,ro,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></a></script>
  
		</div>
		
		<div id="home" style="text-align: center; top: 50%; -ms-transform: translateY(-1%); -webkit-transform: translateY(-1%); transform: translateY(-1%);">
				
				<p><h2 style="color: black;"><big><big><big>Música Top 9</big></big></big></h2>
					
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <big style="text-align:center;">Adrian Rodriguez & Juan Magan - Love Me Again</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/Adrian Rodriguez & Juan Magan - Love Me Again.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/Top/Adrian Rodriguez & Juan Magan - Love Me Again.mp3" download="Adrian Rodriguez & Juan Magan - Love Me Again">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
				
					<big style="text-align:center;">Afrojack & David Guetta - Another Life</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/Afrojack & David Guetta - Another Life.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/Afrojack & David Guetta - Another Life.mp3" download="Afrojack & David Guetta - Another Life">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
					
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <big style="text-align:center;">Bad Bunny, J.Balvin, Ozuna & Arcangel - Soy Peor Remix</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/BAD BUNNY, J.BALVIN, OZUNA & ARCANGEL - SOY PEOR REMIX.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/BAD BUNNY, J.BALVIN, OZUNA & ARCANGEL - SOY PEOR REMIX.mp3" download="Bad Bunny, J.Balvin, Ozuna & Arcangel - Soy Peor Remix">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
					
					<big style="text-align:center;">Cnco & Yande - Hey Dj</big>
				<audio controls controlsList="nodownload" width="263" height="56"> 
					<source src="rec/Top/CNCO & Yande - Hey Dj.mp3"  type="video/mp4"></source> 
					</audio>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/CNCO & Yande - Hey Dj.mp3" download="Cnco & Yande - Hey Dj">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
									
					<big style="text-align:center;">David Guetta & Justin Bieber - 2U</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/David Guetta & Justin Bieber - 2U.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/David Guetta & Justin Bieber - 2U.mp3" download="David Guetta & Justin Bieber - 2U">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
								
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <big style="text-align:center;">J.Balvin, Nicky Jam & Cosculluela - Ayer 2</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/J.Balvin, Nicky Jam & Cosculluela - Ayer 2.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/J.Balvin, Nicky Jam & Cosculluela - Ayer 2.mp3" download="J.Balvin, Nicky Jam & Cosculluela - Ayer 2">Descargar</a><?php } ?>
	<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
					
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <big style="text-align:center;">Luis Fonsi, Daddy Yankee & Justin Bieber - Despacito</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/Luis Fonsi, Daddy Yankee & Justin Bieber - Despacito.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/Luis Fonsi, Daddy Yankee & Justin Bieber - Despacito.mp3" download="Luis Fonsi, Daddy Yankee & Justin Bieber - Despacito">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p>
								
					<big style="text-align:center;">Ozuna & Wisin - Escápate Conmigo</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/Ozuna & Wisin - Escápate Conmigo.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/Ozuna & Wisin - Escápate Conmigo.mp3" download="Ozuna & Wisin - Escápate Conmigo">Descargar</a><?php } ?>
									<form>
										  <class="clasificacion">
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label>
									</form>
									</p> 
					
					<big style="text-align:center;">Taburete - Sirenas</big>
				<audio controls controlsList="nodownload" width="263" height="56">
					<source src="rec/Top/Taburete - Sirenas.mp3"  type="video/mp4"></source>
					</audio>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php if(isset($_SESSION['username']))
	{
	?><a href="rec/Taburete - Sirenas.mp3" download="Taburete - Sirenas">Descargar</a><?php } ?>
								    <form>
										  <class="clasificacion">
											<input id="radio1" type="radio" name="estrellas" value="5"><!--
											--><label for="radio1">★</label><!--
											--><input id="radio2" type="radio" name="estrellas" value="4"><!--
											--><label for="radio2">★</label><!--
											--><input id="radio3" type="radio" name="estrellas" value="3"><!--
											--><label for="radio3">★</label><!--
											--><input id="radio4" type="radio" name="estrellas" value="2"><!--
											--><label for="radio4">★</label><!--
											--><input id="radio5" type="radio" name="estrellas" value="1"><!--
											--><label for="radio5">★</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</form>		
			</div>	
	</body>
</html>