<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="renta";

    $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDatos);
    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }

    $vehicle_rental_id =$_POST['vehicle_rental_id'];
    $date_from=$_POST['date_from'];
    $date_to=$_POST['date_to'];
    $reg_number=$_POST['reg_number'];
    $customer_id=$_POST['customer_id'];
    $rental_status_code=$_POST['rental_status_code'];

    $insertarDatos = "INSERT INTO vehicle_rentals VALUES('$vehicle_rental_id',
                                                        '$date_from',
                                                        '$date_to',
                                                        '$reg_number',
                                                        '$customer_id',
                                                        '$rental_status_code')";
    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

    if(!$ejecutarInsertar){
        echo"Error En  linea sql";
    }

?>