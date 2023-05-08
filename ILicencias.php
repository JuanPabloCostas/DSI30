<?php
$idLicencia=$_POST['idLicencia'];
$fechaExpedicion=$_POST['fechaExpedicion'];
$fechaVencimiento=$_POST['fechaVencimiento'];
$observacion=$_POST['observacion'];
$numeroEmergencia=$_POST['numeroEmergencia'];
$idConductor=$_POST['idConductor'];

print("ID de Licencia ".$idLicencia."<br>");
print("Fecha de Expedicion ".$fechaExpedicion."<br>");
print("Fecha de Vencimiento ".$fechaVencimiento."<br>");
print("Obvervacion ".$observacion."<br>");
print("Numero de Emergencia ".$numeroEmergencia."<br>");
print("ID de Conductor ".$idConductor."<br>");

$SQL = "INSERT INTO Licencias VALUES ('$idLicencia','$fechaExpedicion','$fechaExpedicion','$observacion','$numeroEmergencia','$idConductor')";
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