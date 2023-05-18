<?php

    $V0='91';
    $V1='1';
    $V2='1';
    include("controlador.php");

    $Con = Conectar();
    $SQL = "UPDATE centroverificaciones
    SET numeroCentro='$V1', noLineaVerificacion='$V2'
    WHERE idCentroVerificacion='$V0';";
    $Resul = Ejecutar($Con, $SQL);
    $N = mysqli_affected_rows($Con);
    print("Filas actualizadas: ".$N);
    Desconectar($Con);








?>