<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM verificaciones";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>Id de Verificacion</th>");
    print("<th>Folio</th>");
    print("<th>Tipo de Servicio</th>");
    print("<th>Clase</th>");
    print("<th>Fecha de Expedicion</th>");
    print("<th>Folio de Certificado</th>");
    print("<th>Semestre</th>");
    print("<th>Motivo de Verificacion</th>");
    print("<th>Hora de Entrada</th>");
    print("<th>Hora de Salida</th>");
    print("<th>ID de Vehiculo</th>");
    print("<th>Id de Centro de Verifiacacion</th>");

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