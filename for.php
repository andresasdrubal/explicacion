<?php
	$inicio=$_POST['inicio'];
	$final=$_POST['final'];
	$tabla=$_POST['tabla'];

	$iniciar = (int)$inicio;
	$terminal = (int)$final;
	$num = (int)$tabla;
	
	for ($i=1; $i <=10; $i++){
		echo $num. " x " .$i. " = " .$num*$i. "<br>";
	}
	echo "<a href='for.html'>volver atras <a>";
	
	?>
