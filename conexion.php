<?php

	$con = mysqli_connect("base_datos:3306","root","","asociacion")or die("No se ha conectado");
	
	if(!$con)
	{
		echo "error al conectar"
	}
	else
	{
	echo "Conectado"
	}
?>
