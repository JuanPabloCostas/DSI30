<?php

$idConductor=$_POST['idConductor'];




$SQL = "Delete from conductores 
where idConductor = '$idConductor'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>