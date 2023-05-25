<?php
require('fpdf.php');
include("Controlador.php");
$SQL = "SELECT * FROM licenciacompleta WHERE idLicencia = 1234567";
$Con = Conectar();
$Result = Ejecutar($Con,$SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);





$pdf = new FPDF('P','mm',array(50,80));
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,2);
$pdf->Image('fondo.jpg',0,0,0,80);
$pdf->Image('Coat_of_arms_of_Queretaro.png',6.7,4,8);
$pdf->Image($Fila[14],26,16,21);
$pdf->Image($Fila[15],18.5,62.4,8);
$pdf->Image('bandera.png',34.5,62.4,18);
$pdf->SetFont('Arial','',4);
$pdf->SetXY(17.7,4);
$pdf->Cell(27.6,2.1,'Estados Undios Mexicanos');
$pdf->SetXY(17.7,4);
$pdf->Cell(27.6,5.8,'Poder Ejecutivo del Estado de Queretaro');
$pdf->SetFont('Arial','B',4);
$pdf->SetXY(17.7,8.5);
$pdf->Cell(27.6,2.1,'Secretaria de Seguridad Ciudadana');
$pdf->SetFont('Arial','B',5.2);
$pdf->SetXY(17.7,10.6);
$pdf->Cell(27.6,2.1,'Licencia para Conducir');
$pdf->SetFont('Arial','',3);
$pdf->SetXY(16.7,28);
$pdf->Cell(27.6,2.1,'No. de Licencia');
$pdf->SetFont('Courier','',2);
$pdf->SetXY(14,70.2);
$pdf->Cell(18,2.1,'AUTORIZO PARA QUE LA SIGUIENTE SEA',0,0,'C');
$pdf->SetXY(14,71);
$pdf->Cell(18,2.1,'RECABADA COMO GARANTIA DE INFRACCION',0,0,'C');
$pdf->SetFont('Courier','',7.5);
$pdf->SetXY(16.4,31.8);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(10,2.1,$Fila[0],0,0,'R');
$pdf->SetFont('Arial','B',4.2);
$pdf->SetXY(11.7,35);
$pdf->SetTextColor(0);
$pdf->Cell(27.6,2.1,'AUTOMOVILISTA');
$pdf->SetFont('Arial','',3);
$pdf->SetXY(41.7,37);
$pdf->Cell(27.6,2.1,'Nombre');
$pdf->SetFont('times','',7.8);
$pdf->SetXY(8.2,40.3);
$pdf->Cell(40,0,$Fila[2],0,'R',true);
$pdf->SetFont('Arial','',7.8);
$pdf->SetXY(8.2,43.8);
$pdf->Cell(40,0,$Fila[3],0,'R',true);
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(8.2,47.3);
$pdf->Cell(40,0,$Fila[1],0,'R',true);
$pdf->SetFont('Arial','B',3);
$pdf->SetXY(38.4,48);
$pdf->Cell(27.6,2.1,'Observaciones');
$pdf->SetFont('Arial','B',3);
$pdf->SetXY(2.5,50);
$pdf->Cell(27.6,2.1,'Fecha de Nacimiento');
$pdf->SetXY(2.5,54.2);
$pdf->Cell(27.6,2.1,'Fecha de Expedicion');
$pdf->SetXY(2.5,59.4);
$pdf->Cell(0,0,'Valida hasta');
$pdf->SetXY(20.5,60.4);
$pdf->Cell(0,0,'Firma');
$pdf->SetXY(2.5,63.3);
$pdf->Cell(0,0,'Antiguedad');
$pdf->SetFont('Arial','',5.8);
$pdf->SetXY(2.5,52);
$pdf->Cell(27.6,2.1,$Fila[4]);
$pdf->SetXY(2.5,56.2);
$pdf->Cell(27.6,2.1,$Fila[5]);
$pdf->SetXY(2.5,65.2);
$pdf->Cell(0,0,$Fila[7]);
$pdf->SetFont('Arial','B',5.8);
$pdf->SetXY(2.5,61.2);
$pdf->Cell(0,0,$Fila[6]);
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(3.7,68.2);
$pdf->SetFillColor(246,190,0);
$pdf->Cell(7,7,'A',0,0,'C',true);
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
//Bloque 1: 911, rectangulo negro, denuncias
$pdf->Image('telEmergencias.jpg',.46, .5, 10,8);
$pdf->Image('pill.png',11.5, .5, 26,8);
$pdf->SetFont('Times','B',9);
$pdf->SetXY(16,4.4);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(1.75,.3,'B211571223',1);
$pdf->Image('denuncia.png',40, .5, 9);
//Bloque 2: Domicilio y carros
$pdf->SetFont('Times','B',3);
$pdf->SetXY(39,8.5);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(10.5,.3,'Domicilio',0,0,'R');
$pdf->SetFont('Times','B',6.5);
$pdf->SetXY(39,11.5);
$pdf->Cell(10.5,.3,'Cueva Santa',0,0,'R');
$pdf->SetFont('Times','B',6.5);
$pdf->SetXY(39,14.5);
$pdf->Cell(10.5,.3,'#54',0,0,'R');
$pdf->SetFont('Times','B',6.5);
$pdf->SetXY(39,17.5);
$pdf->Cell(10.5,.3,'Santuarios',0,0,'R');
$pdf->SetFont('Times','B',6.5);
$pdf->SetXY(39,20.5);
$pdf->Cell(10.5,.3,'Residenical',0,0,'R');
$pdf->SetFont('Times','B',6.5);
$pdf->SetXY(39,23.5);
$pdf->Cell(10.5,.3,'Qro. Qro.',0,0,'R');
$pdf->Image('carros.png',3,22, 45,12);
//Bloque 3: Restricciones, Sangre, Organos y Num Emergencia
$pdf->SetFont('Times','B',3);
$pdf->SetXY(.5,30);
$pdf->Cell(1.35,.3,'Restricciones',0,0,'L');
$pdf->SetFont('Times','B',3);
$pdf->SetXY(.5,32);
$pdf->Cell(1.35,.3,$Fila[10],0,0,'L');
$pdf->SetFont('Times','B',3);
$pdf->SetXY(39,30);
$pdf->Cell(10.5,.3,'Grupo Sanguineo',0,0,'R');
$pdf->SetFont('Times','',6.5);
$pdf->SetXY(39,33);
$pdf->Cell(10.5,.3,$Fila[11],0,0,'R');
$pdf->SetFont('Times','B',3);
$pdf->SetXY(39,36);
$pdf->Cell(10.5,.3,'Donador Organos',0,0,'R');
$pdf->SetFont('Times','',6.5);
$pdf->SetXY(39,39);
$pdf->Cell(10.5,.3,$Fila[12],0,0,'R');
$pdf->SetFont('Times','B',3);
$pdf->SetXY(39,42);
$pdf->Cell(10.5,.3,'Numero de Emergencia',0,0,'R');
$pdf->SetFont('Times','',6.5);
$pdf->SetXY(39,45);
$pdf->Cell(10.5,.3,$Fila[13],0,0,'R');
//Bloque 4: Firma y Secretario de Segu Ciudadana
$pdf->Image('firma.png', 37,48, 10);
$pdf->SetFont('Times','B',3.2);
$pdf->SetXY(40,57);
$pdf->Cell(10,.3,'MTRO. EN GPA. MIGUEL ANGEL CONTRERAS ALVAREZ',0,0,'R');
$pdf->SetFont('Times','B',3.2);
$pdf->SetXY(40,58.5);
$pdf->Cell(10,.3,'SECRETARIO DE SEGURIDAD CUIDADANA',0,0,'R');
//Bloque 5: Fundamento legal y logo 
$pdf->SetFont('Times','B',3);
$pdf->SetXY(.5,58.5);
$pdf->Cell(1.35,.3,'Fundamento Legal',0,0,'L');
$pdf->SetFont('Times','',3.2);
$pdf->SetXY(.5,60);
$pdf->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$pdf->SetFont('Times','',3.2);
$pdf->SetXY(.5,61);
$pdf->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$pdf->SetFont('Times','',3.2);
$pdf->SetXY(.5,62);
$pdf->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$pdf->SetFont('Times','',3.2);
$pdf->SetXY(.5,63);
$pdf->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$pdf->SetFont('Times','',3.2);
$pdf->SetXY(.5,64);
$pdf->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$pdf->Image('escudo.png', 23.5, 68, 28);//x,y,w,h

$pdf->Output('D');
?>