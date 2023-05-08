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
$FilasAfectadas = mysqli_affected_rows($Con);
if ($FilasAfectadas >= 0) {
    print($FilasAfectadas." filas eliminadas");
}else{
    print("Error de Eliminacion");
}
Desconectar($Con);




?>