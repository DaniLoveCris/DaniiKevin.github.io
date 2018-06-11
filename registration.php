<?php

?>



<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
	require('db.php');
    
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Registro satisfactorio.</h3><br/>Pinche aquí para iniciar sesión <a href='login.php'>Login</a></div>";
        }
    }else{
?>



<div class="form">
<h1>Registro</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required pattern="[A-Za-z]+@[a-z]+\.[a-z]{2,3}" />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>


</p><div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'cy', includedLanguages: 'ar,ca,de,en,es,fr,it,ja,pt,ro,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
			}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></a></script></p>

	
	
<a href="index.php"><b><big><big><big>Atrás</big></big></big></b></a></p>

</body>
</html>
