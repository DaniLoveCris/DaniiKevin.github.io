<?php

?>



<html>
<head>
<meta charset="utf-8">
<title>Logear</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
	require('db.php');
	session_start();
    
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php");
            }else{
				echo "<div class='form'><h3>Usuario/Contraseña es incorrecto.</h3><br/>Pinche aquí para <a href='login.php'>Login</a></div>";
				}
    }else{
?>


<div class="form">
<h1>Bienvenido!</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>No estás registrado? <a href='registration.php'>Regístrate aquí</a></p>
</div>
<?php } ?>

</p><div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'cy', includedLanguages: 'ar,ca,de,en,es,fr,it,ja,pt,ro,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></a></script></p>

<a href="index.php"><b><big><big><big>Atrás</big></big></big></b></a> </p>

</body>
</html>
