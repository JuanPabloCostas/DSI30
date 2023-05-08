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
$FilasAfectadas = mysqli_affected_rows($Con);
if ($FilasAfectadas >= 0) {
    print($FilasAfectadas." filas eliminadas");
}else{
    print("Error de Eliminacion");
}
Desconectar($Con);




?>