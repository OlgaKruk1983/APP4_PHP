<?php include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$sql ="SELECT ciudad, count(id) as totalusers FROM `empleados` GROUP BY ciudad ORDER BY ciudad";
$records = mysqli_query($con,$sql);
$data = array();
while($row = mysqli_fetch_assoc($records)){
$data[] = $row;
}


$jsonData = json_encode($data);

?>

<textarea style="display:none" id="chartinfo"><?= $jsonData ?></textarea>

<div id="ciudadChart" style="width:100%; height:500px" ></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="chart.js"></script>



<form action="insertar.php" method="post">
    Nombre:
<input type="text" name="emp_nombre"><br><br>
Salario:
<input type="text" name="salario"><br><br>
Género:
<input type="text" name="genero"><br><br>
Ciudad:
<input type="text" name="ciudad"><br><br>
Email:
<input type="text" name="email"><br><br>

<button type="submit" name="enviar">Enviar datos</button>





</form>
    
</body>
</html>