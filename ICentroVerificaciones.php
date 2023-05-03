<?php
// $idLicencia=$_POST['idLicencia'];
$idCentroVerificacion=$_POST['idCentroVerificacion'];
$numeroCentro=$_POST['numeroCentro'];
$noLineaVerificacion=$_POST['noLineaVerificacion'];

//print("ID de Licencia ".$idLicencia."<br>");
print("ID de Centro de Verificacion ".$idCentroVerificacion."<br>");
print("Numero de Centro ".$numeroCentro."<br>");
print("Numero de Linea de Verificacion ".$noLineaVerificacion."<br>");

$SQL = "INSERT INTO centroverificaciones VALUES ('$idCentroVerificacion','$numeroCentro','$noLineaVerificacion')";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);
?>