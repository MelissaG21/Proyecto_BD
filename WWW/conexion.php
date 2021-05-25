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
    $customer_name = $_POST['customer_name'];
    $customer_details = $_POST['customer_details'];

    $insertarDatos="INSERT INTO customers VALUES('$customer_id',
                                                '$customer_name',
                                                '$customer_details')";
    
    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

    if(!$ejecutarInsertar){
        echo"Error En  linea sql";
    }


    $insertarDatos2 = "INSERT INTO vehicle_rentals VALUES('$vehicle_rental_id',
                                                        '$date_from',
                                                        '$date_to',
                                                        '$reg_number',
                                                        '$customer_id',
                                                        '$rental_status_code')";
    $ejecutarInsertar2 = mysqli_query($enlace,$insertarDatos2);

    if(!$ejecutarInsertar2){
        echo"Error En  linea sql";
    }

?>