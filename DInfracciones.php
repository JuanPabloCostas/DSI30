<?php
// modificar
$idInfraccion=$_POST['idInfraccion'];



// modificar
$SQL = "Delete from infracciones 
where idInfraccion = '$idInfraccion'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>