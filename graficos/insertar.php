<?php
include("conect.php");

$con=conectar();
$nombre = $_POST["emp_nombre"];
$salario = $_POST["salario"];
$genero = $_POST["genero"];
$ciudad = $_POST["ciudad"];
$email = $_POST["email"];


$insertar ="INSERT INTO empleados(emp_nombre, salario, genero, ciudad, email)VALUES(
    '$nombre',
    '$salario',
    '$genero',
    '$ciudad',
    '$email')";

    $query = mysqli_query($con,$insertar);
    
    if($query){
        header('location:gracias.php');
        exit();
    }else{
        
    }

?>