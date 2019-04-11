<?php

    // Conexion a la base de datos
	define('DB_HOST','crudapp2019.mysql.database.azure.com');
	define('DB_USER','josesitomyapp@crudapp2019');
	define('DB_PASS','Josesito97');
    define('DB_NAME','crudapp');
    
    //Database=crudapp;
    //Data Source=crudapp2019.mysql.database.azure.com;
    //User Id=josesitomyapp@crudapp2019;
    //Password=Josesito97

	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?>
