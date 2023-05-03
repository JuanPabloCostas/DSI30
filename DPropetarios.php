<?php
// modificar
$idPropietario=$_POST['idPropietario'];



// modificar
$SQL = "Delete from propietarios
where idPropietario = '$idPropietario'";
print($SQL);
include("Controlador.php");
$Con = Conectar();
$Resul=Ejecutar($Con,$SQL);
Desconectar($Con);




?>