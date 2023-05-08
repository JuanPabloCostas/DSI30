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
$FilasAfectadas = mysqli_affected_rows($Con);
if ($FilasAfectadas >= 0) {
    print($FilasAfectadas." filas eliminadas");
}else{
    print("Error de Eliminacion");
}
Desconectar($Con);




?>