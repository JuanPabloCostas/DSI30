<?php
// $idLicencia=$_POST['idLicencia'];
$idConductor=$_POST['idConductor'];
$curp=$_POST['curp'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$correo=$_POST['correo'];
$numeroTelefono=$_POST['numeroTelefono'];
$domicilio=$_POST['domicilio'];
$grupoSanguineo=$_POST['grupoSanguineo'];
$donadorOrganos=$_POST['donadorOrganos'];
$estadoProcedencia=$_POST['estadoProcedencia'];
$sexo=$_POST['sexo'];

//print("ID de Licencia ".$idLicencia."<br>");
print("ID de Conductor ".$idConductor."<br>");
print("Curp".$curp."<br>");
print("Nombre".$nombre."<br>");
print("Apellido Paterno ".$apellidoPaterno."<br>");
print("Apellido Materno ".$apellidoMaterno."<br>");
print("Fecha de Nacimiento ".$fechaNacimiento."<br>");
print("Correo ".$correo."<br>");
print("Numero de Telefono ".$numeroTelefono."<br>");
print("Domicilio ".$domicilio."<br>");
print("Grupo Sanguineo ".$grupoSanguineo."<br>");
print("Donador de Organos ".$donadorOrganos."<br>");
print("Estado de Procedencia ".$estadoProcedencia."<br>");
print("Sexo ".$sexo."<br>");

/*
$SQL = "INSERT INTO Licencias VALUES ('$idLicencia','$fechaExpedicion','$fechaExpedicion','$observacion','$numeroEmergencia','$idConductor')";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);
*/

$SQL = "INSERT INTO Conductores VALUES ('$idConductor','$curp','$nombre','$apellidoPaterno','$apellidoMaterno','$fechaNacimiento','$correo','$numeroTelefono','$domicilio','$grupoSanguineo','$donadorOrganos','$estadoProcedencia','$sexo')";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);

?>