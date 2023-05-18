<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM tarjetascirculaciones";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>Id de Tarjeta de Circulacion</th>");
    print("<th>Uso de Servicio</th>");
    print("<th>Vigencia</th>");
    print("<th>Operacion</th>");
    print("<th>Constancia de Inscripcion</th>");
    print("<th>Clase</th>");
    print("<th>Movimiento</th>");
    print("<th>Fecha de Expedicion</th>");
    print("<th>Id de Vehiculo</th>");
    print("<th>Id de Propetario</th>");

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