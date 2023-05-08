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
$FilasAfectadas = mysqli_affected_rows($Con);
if ($FilasAfectadas >= 0) {
    print($FilasAfectadas." filas eliminadas");
}else{
    print("Error de Eliminacion");
}
Desconectar($Con);




?>