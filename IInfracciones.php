<?php
$idInfraccion=$_GET['idInfraccion'];
$noFolio=$_GET['noFolio'];
$fechaHora=$_GET['fechaHora'];
$ubicacionInfraccion=$_GET['ubicacionInfraccion'];
$motivacion=$_GET['motivacion'];
$operativo=$_GET['operativo'];
$idLicencia=$_GET['idLicencia'];
$idOficial=$_GET['idOficial'];
$idTjaCirculacion=$_GET['idTjaCirculacion'];
$idVehiculo=$_GET['idVehiculo'];


print("Id de Infraccion ".$idCentroVerificacion."<br>");
print("Numero de Folio ".$numeroCentro."<br>");
print("Fecha y Hora ".$noLineaVerificacion."<br>");
print("Ubicacion de la Infraccion ".$idCentroVerificacion."<br>");
print("Motivacion ".$idCentroVerificacion."<br>");
print("Operativo ".$idCentroVerificacion."<br>");
print("Id de Licencia ".$idCentroVerificacion."<br>");
print("Id de Oficial ".$idCentroVerificacion."<br>");
print("Id de Tarjeta de Ciruclacion ".$idCentroVerificacion."<br>");
print("Id de Vehiculo".$idCentroVerificacion."<br>");

$SQL = "INSERT INTO Infracciones VALUES ('$idInfraccion','$noFolio',
'$fechaHora','$ubicacionInfraccion','$motivacion','$operativo'
,'$idLicencia','$idOficial','$idTjaCirculacion','$idVehiculo')";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
$FilasAfectadas = mysqli_affected_rows($Con);
if ($FilasAfectadas == 1) {
    print("1 Registro Insertado")
}else{
    print("Registro no insertado")
}
Desconectar($Con);

?>