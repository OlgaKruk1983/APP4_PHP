<?php
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="grafico_chart";

$con=mysqli_connect($host,$user,$password,$dbname);

if(!$con){
    die("conexion fallida: " .mysqli_connect_error());
}

?>