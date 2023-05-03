<?php
// modificar
$idVerificacion=$_POST['idVerificacion'];



// modificar
$SQL = "Delete from verificaciones 
where idVerificacion = '$idVerificacion'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>