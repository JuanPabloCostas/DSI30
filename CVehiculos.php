<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM vehiculos";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>Id de vehiculo</th>");
    print("<th>Placa</th>");
    print("<th>Numero de Serie</th>");
    print("<th>Fecha</th>");
    print("<th>Municipio</th>");
    print("<th>Origen</th>");
    print("<th>Modelo</th>");
    print("<th>Marca</th>");
    print("<th>Folio</th>");
    print("<th>Transmision</th>");
    print("<th>Cilindraje</th>");
    print("<th>Capacidad</th>");
    print("<th>Numero de Puertas</th>");
    print("<th>Numero de Asientos</th>");
    print("<th>Numero de Motor</th>");
    print("<th>Clase</th>");
    print("<th>Tipo</th>");
    print("<th>Uso</th>");
    print("<th>RFA</th>");
    print("<th>Color</th>");
    print("<th>Localidad</th>");
    print("<th>Clave Vehicular</th>");
    print("<th>Placa Anterior</th>");
    print("<th>Tipo de Combustible</th>");

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