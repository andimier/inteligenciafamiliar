<?php
	require("constants.php");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    mysqli_set_charset($connection, "utf8");

	if (!$connection) {
		die("La conexion a la base de datos fallo: " . mysql_error($connection));
	}

	$db_select = mysqli_select_db($connection, "intelige_base02");

	if (!$db_select) {
		die("La Seleccion de la base de datos fallo: " . mysqli_error($connection));
	}
?>