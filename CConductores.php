<?php
    include('controlador.php');
    $Con = Conectar();
    $SQL = "Select * FROM conductores";
    $Result = Ejecutar($Con,$SQL);

    $CantidadFilas = mysqli_num_rows($Result);

    print("<table border = 1>");
    print("<tr>");
    
    print("<th>ID de Conductor</th>");
    print("<th>Curp</th>");
    print("<th>Nombre</th>");
    print("<th>Apellido Paterno</th>");
    print("<th>Apellido Materno</th>");
    print("<th>Fecha de Nacimiento</th>");
    print("<th>Correo</th>");
    print("<th>Numero de Telefono</th>");
    print("<th>Domicilio</th>");
    print("<th>Grupo Sanguineo</th>");
    print("<th>Donador de Organos</th>");
    print("<th>Estado de Procedencia</th>");
    print("<th>Sexo</th>");

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

    print("Cantidad de filas ".$CantidadFilas);

    Desconectar($Con);




?>