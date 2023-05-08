<?php
$idOficial=$_GET['idOFicial'];
$nombre=$_GET['nombre'];
$apellidoPaterno=$_GET['apellidoPaterno'];
$apellidoMaterno=$_GET['apellidoMaterno'];
$tecnicoVerficador=$_GET['tecnicoVerificador'];


print("Id de Oficial ".$idOficial."<br>");
print("Nombre ".$nombre."<br>");
print("Apelliod Paterno ".$apellidoPaterno."<br>");
print("Apellido Materno ".$apellidoMaterno."<br>");
print("Tecnico Verificador ".$tecnicoVerficador."<br>");


$SQL = "INSERT INTO Oficiales VALUES ('$idOficial','$nombre',
'$apellidoPaterno','$apellidoMaterno','$tecnicoVerficador')";
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