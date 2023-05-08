<?php
    $idTjaCirculacion=$_REQUEST['idTjaCirculacion'];
    $usoServicio=$_REQUEST['usoServicio'];
    $vigencia=$_REQUEST['vigencia'];
    $operacion=$_REQUEST['operacion'];
    $constanciaInscripcion=$_REQUEST['constanciaInscripcion'];
    $clase=$_REQUEST['clase'];
    $movimiento=$_REQUEST['movimiento'];
    $fechaExpedicion=$_REQUEST['fechaExpedicion'];
    $idVehiculo=$_REQUEST['idVehiculo'];
    $idPropetario=$_REQUEST['idPropetario'];


    
    print("Id de Tarjeta de Circulacion ".$idTjaCirculacion."<br>");
    print("Uso de Servicio ".$usoServicio."<br>");
    print("Vigencia ".$vigencia."<br>");
    print("Operacion ".$operacion."<br>");
    print("Constancia de Inscripcion ".$constanciaInscripcion."<br>");
    print("Clase ".$clase."<br>");
    print("Movimiento ".$movimiento."<br>");
    print("Fecha de Expedicion ".$fechaExpedicion."<br>");
    print("Id de Vehiculo ".$idVehiculo."<br>");
    print("Id de Propetario ".$idPropetario."<br>");


    $SQL = "INSERT INTO TarjetasCirculaciones VALUES ('$idTjaCirculacion','$usoServicio',
    '$vigencia','$operacion','$constanciaInscripcion','$clase'
    ,'$movimiento','$fechaExpedicion','$idVehiculo','$idPropetario')";
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