<?php
// modificar
$idTjaCirculacion=$_POST['idTjaCirculacion'];



// modificar
$SQL = "Delete from tarjetascirculaciones 
where idTjaCirculacion = '$idTjaCirculacion'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>