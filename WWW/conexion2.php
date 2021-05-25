<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="renta";

    $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDatos);
    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
    $customer_id=$_POST["customer_id"];
    $customer_name = $_POST["customer_name"];
    $customer_details = $_POST["customer_details"];

    $insertarDatos="INSERT INTO customers VALUES('$customer_id',
                                                    '$customer_name',
                                                    '$customer_details')";
        
    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

    if(!$ejecutarInsertar){
            echo"Error En  linea sql";
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="car.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Automax</title>
</head>
<body>
    <h1>Datos recibidos! pronto te enviaremos un correo electrónico:)</h1>
    <hr>
    <br>
    <a href="index.html">Volver a la página inicial</a>
</body>
</html>