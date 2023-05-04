<?php

    include("Controlador.php");
    $SQL = "Select * from centroverificaciones";
    $Con = Conectar();
    $Resul = Ejecutar($Con,$SQL);
    $Numero = mysqli_num_rows($Resul);
    print($Numero);
    Desconectar($Con);





?>