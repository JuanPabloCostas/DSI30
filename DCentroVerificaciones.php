<?php

$idCentroVerificacion=$_POST['idCentroVerificacion'];




$SQL = "Delete from centroverificaciones 
where idCentroVerificacion = '$idCentroVerificacion'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>