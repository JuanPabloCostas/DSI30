<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM infracciones";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>ID de Identifiacion</th>");
    print("<th>Numero de Folio</th>");
    print("<th>Fecha y Hora</th>");
    print("<th>Ubicacion de Infraccion</th>");
    print("<th>Motivacion</th>");
    print("<th>Operativo</th>");
    print("<th>ID de Licencia</th>");
    print("<th>ID de oficial</th>");
    print("<th>ID de tarjeta de circulacion</th>");
    print("<th>ID de vehiculo</th>");


    print("</tr>");

    for ($i=0; $i < $CantidadFilas; $i++) { 
        $Registro = mysqli_fetch_row($Result);
        print("<tr>");
        for ($j=0; $j < count($Registro); $j++) { 
            
            print("<td>$Registro[$j]</td>");
            
        }
        print("<tr>");
    }

    print("</table>");

    print("Cantidad de filas    ".$CantidadFilas);

    Desconectar($Con);




?>