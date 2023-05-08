<?php
    $idVerificacion=$_REQUEST['idVerificacion'];
    $folio=$_REQUEST['folio'];
    $tipoServicio=$_REQUEST['tipoServicio'];
    $clase=$_REQUEST['clase'];
    $fechaExpedicion=$_REQUEST['fechaExpedicion'];
    $folioCertificado=$_REQUEST['folioCertificado'];
    $semestre=$_REQUEST['semestre'];
    $moticoVerificacion=$_REQUEST['moticoVerificacion'];
    $horaEntrada=$_REQUEST['horaEntrada'];
    $horaSalida=$_REQUEST['horaSalida'];
    $idVehiculo=$_REQUEST['idVehiculo'];
    $idCentroVerificacion=$_REQUEST['idCentroVerificacion'];


    
    print("Id de Verifiacion ".$idVerificacion."<br>");
    print("Folio ".$folio."<br>");
    print("Tipo de Servicio ".$tipoServicio."<br>");
    print("Clase ".$clase."<br>");
    print("Fecha de Expedicion ".$fechaExpedicion."<br>");
    print("Folio de Certificado ".$folioCertificado."<br>");
    print("Semestre ".$semestre."<br>");
    print("Motivo Verificacion ".$moticoVerificacion."<br>");
    print("Hora de Entrada ".$horaEntrada."<br>");
    print("Hora de Salida ".$horaSalida."<br>");
    print("Id de Vehiculo ".$idVehiculo."<br>");
    print("Id de Centro de Verificacion ".$idCentroVerificacion."<br>");

    $SQL = "INSERT INTO Verificaciones VALUES ('$idVerificacion','$folio','$tipoServicio','$clase','$fechaExpedicion','$folioCertificado','$semestre','$moticoVerificacion','$horaEntrada','$horaSalida','$idVehiculo','$idCentroVerificacion')";
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