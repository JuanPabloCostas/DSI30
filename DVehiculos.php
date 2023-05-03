<?php
// modificar
$idVehiculo=$_POST['idVehiculo'];



// modificar
$SQL = "Delete from vehiculos 
where idVehiculo = '$idVehiculo'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>