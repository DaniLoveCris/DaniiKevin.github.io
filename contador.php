<?php	
	$num = file_get_contents("numero.txt");
	
	$num = $num + 1;
	
	file_put_contents("numero.txt", $num);
	
	echo "Número de visita: " .$num;
?>

