<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM tarjetascirculaciones";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);
    print($CantidadFilas."<br>");

    for ($i=0; $i < $CantidadFilas; $i++) { 
        $Registro = mysqli_fetch_row($Result);
        print_r($Registro);
        print("<br>");
    }
    

    Desconectar($Con);




?>