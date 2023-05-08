<?php

$idCentroVerificacion=$_POST['idCentroVerificacion'];




$SQL = "Delete from centroverificaciones 
where idCentroVerificacion = '$idCentroVerificacion'";
// print($SQL);
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