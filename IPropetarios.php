<?php
    $idPropetario=$_REQUEST['idPropetario'];
    $rfc=$_REQUEST['rfc'];
    $nombre=$_REQUEST['idPropetario'];
    $apellidoPaterno=$_REQUEST['idPropetario'];
    $apellidoMaterno=$_REQUEST['idPropetario'];
    $entidadFederativa=$_REQUEST['idPropetario'];
    $localidad=$_REQUEST['idPropetario'];
    $municipio=$_REQUEST['idPropetario'];


    print("ID de Propetario ".$idPropetario."<br>");
    print("RFC ".$rfc."<br>");
    print("Nombre ".$nombre."<br>");
    print("Apellido Paterno".$apellidoPaterno."<br>");
    print("Apeliido Materno ".$apellidoPaterno."<br>");
    print("Entidad Federativa ".$entidadFederativa."<br>");
    print("Localidad ".$localidad."<br>");
    print("Municicpio ".$municipio."<br>");


    $SQL = "INSERT INTO Propetarios VALUES ('$idOficial','$nombre',
    '$apellidoPaterno','$apellidoMaterno','$entidadFederativa','$localidad'
    ,'$municipio')";
    print($SQL);
    include("Controlador.php");
    $Con = Conectar();
    $Resul=Ejecutar($Con,$SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas == 1) {
        print("1 Registro Insertado")
    }else{
        print("Registro no insertado")
    }
    Desconectar($Con);
?>