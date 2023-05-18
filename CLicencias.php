<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM licencias";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>Id de Licencia</th>");
    print("<th>Fecha de Expedicion</th>");
    print("<th>Fecha de Vencimiento</th>");
    print("<th>Observaciones</th>");
    print("<th>Numero de Emergencia</th>");
    print("<th>ID de Conductor</th>");

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