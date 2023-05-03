<?php
// modificar
$idLicencia=$_POST['idLicencia'];



// modificar
$SQL = "Delete from licencias 
where idLicencia = '$idLicencia'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>