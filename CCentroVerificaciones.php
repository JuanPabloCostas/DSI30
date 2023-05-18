<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM centroverificaciones";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>ID Centro de Verificacion</th>");
    print("<th>Numero del Centro</th>");
    print("<th>Numero de linea de verifiacion</th>");

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