<?php
	$conectar=@mysql_connect('localhost','root','');
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('prueba');
		if(!$base){
			echo"Falla en la conexión de datos";			
		}
	}
	$nombrestacion=$_POST['nomesta'];
	$ubicacion=$_POST['ubic'];
	$numbicicletas=$_POST['numbici'];
	$sql="INSERT INTO datos VALUES('$nombrestacion',
								   '$ubicacion',
								   '$numbicicletas')";
	$registrar=mysql_query($sql);
	if(!$registrar){
		echo"Falla en Ejecución";
	}else{
		echo"Los datos han sido ingresados satisfactoriamente<br><a href='index.html'>Nuevo Ingreso</a>";
	}
?>