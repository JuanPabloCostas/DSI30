<?php
// modificar
$idOficial=$_POST['idOficial'];



// modificar
$SQL = "Delete from oficiales 
where idOficial = '$idOficial'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>