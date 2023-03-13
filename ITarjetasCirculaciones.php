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


    
    print("Id de Tarjeta de Circulacion ".$idTjaCirculacion.<br>);
    print("Uso de Servicio ".$usoServicio.<br>);
    print("Vigencia ".$vigencia.<br>);
    print("Operacion ".$operacion.<br>);
    print("Constancia de Inscripcion ".$constanciaInscripcion.<br>);
    print("Clase ".$clase.<br>);
    print("Movimiento ".$movimiento.<br>);
    print("Fecha de Expedicion ".$fechaExpedicion.<br>);
    print("Id de Vehiculo ".$idVehiculo.<br>);
    print("Id de Propetario ".$idPropetario.<br>);

?>