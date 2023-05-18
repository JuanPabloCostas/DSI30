<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM oficiales";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>Id de Oficial</th>");
    print("<th>Nombre</th>");
    print("<th>Apellido Paterno</th>");
    print("<th>Apellido Materno</th>");
    print("<th>Tecnico Verificador</th>");

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