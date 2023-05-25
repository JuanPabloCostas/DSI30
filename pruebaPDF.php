<?php

include("Controlador.php");
$SQL = "SELECT * FROM licenciacompleta WHERE idLicencia = 1234567";
$Con = Conectar();
$Result = Ejecutar($Con,$SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);

require('fpdf.php');

class PDF extends FPDF
{
// Cabecera frontal
function contenido()
{


$this->Image('fondo.jpg',0,0,0,80);
$this->Image('Coat_of_arms_of_Queretaro.png',6.7,4,8);
$this->Image($Fila[17],26,16,21);
$this->Image('firma.png',18.5,62.4,8);
$this->Image('bandera.png',34.5,62.4,18);
$this->SetFont('Arial','',4);
$this->SetXY(17.7,4);
$this->Cell(27.6,2.1,'Estados Undios Mexicanos');
$this->SetXY(17.7,4);
$this->Cell(27.6,5.8,'Poder Ejecutivo del Estado de Queretaro');
$this->SetFont('Arial','B',4);
$this->SetXY(17.7,8.5);
$this->Cell(27.6,2.1,'Secretaria de Seguridad Ciudadana');
$this->SetFont('Arial','B',5.2);
$this->SetXY(17.7,10.6);
$this->Cell(27.6,2.1,'Licencia para Conducir');
$this->SetFont('Arial','',3);
$this->SetXY(16.7,28);
$this->Cell(27.6,2.1,'No. de Licencia');
$this->SetFont('Courier','',2);
$this->SetXY(14,70.2);
$this->Cell(18,2.1,'AUTORIZO PARA QUE LA SIGUIENTE SEA',0,0,'C');
$this->SetXY(14,71);
$this->Cell(18,2.1,'RECABADA COMO GARANTIA DE INFRACCION',0,0,'C');
$this->SetFont('Courier','',7.5);
$this->SetXY(16.4,31.8);
$this->SetTextColor(255,0,0);
$this->Cell(10,2.1,'1111',0,0,'R');
$this->SetFont('Arial','B',4.2);
$this->SetXY(11.7,35);
$this->SetTextColor(0);
$this->Cell(27.6,2.1,'AUTOMOVILISTA');
$this->SetFont('Arial','',3);
$this->SetXY(41.7,37);
$this->Cell(27.6,2.1,'Nombre');
$this->SetFont('times','',7.8);
$this->SetXY(8.2,40.3);
$this->Cell(40,0,'COSTAS',0,'R',true);
$this->SetFont('Arial','',7.8);
$this->SetXY(8.2,43.8);
$this->Cell(40,0,'RUEDA',0,'R',true);
$this->SetFont('Arial','B',8);
$this->SetXY(8.2,47.3);
$this->Cell(40,0,'JUAN PABLO',0,'R',true);
$this->SetFont('Arial','B',3);
$this->SetXY(38.4,48);
$this->Cell(27.6,2.1,'Observaciones');
$this->SetFont('Arial','B',3);
$this->SetXY(2.5,50);
$this->Cell(27.6,2.1,'Fecha de Nacimiento');
$this->SetXY(2.5,54.2);
$this->Cell(27.6,2.1,'Fecha de Expedicion');
$this->SetXY(2.5,59.4);
$this->Cell(0,0,'Valida hasta');
$this->SetXY(20.5,60.4);
$this->Cell(0,0,'Firma');
$this->SetXY(2.5,63.3);
$this->Cell(0,0,'Antiguedad');
$this->SetFont('Arial','',5.8);
$this->SetXY(2.5,52);
$this->Cell(27.6,2.1,'29/07/2003');
$this->SetXY(2.5,56.2);
$this->Cell(27.6,2.1,'16/10/2023');
$this->SetXY(2.5,65.2);
$this->Cell(0,0,'14');
$this->SetFont('Arial','B',5.8);
$this->SetXY(2.5,61.2);
$this->Cell(0,0,'16/10/2037');
$this->SetFont('Arial','B',10);
$this->SetXY(3.7,68.2);
$this->SetFillColor(246,190,0);
$this->Cell(7,7,'A',0,0,'C',true);
$this->AddPage();
$this->SetAutoPageBreak(false);
//Bloque 1: 911, rectangulo negro, denuncias
$this->Image('telEmergencias.jpg',.46, .5, 10,8);
$this->Image('pill.png',11.5, .5, 26,8);
$this->SetFont('Times','B',9);
$this->SetXY(16,4.4);
$this->SetTextColor(255,255,255);
$this->Cell(1.75,.3,'B211571223',1);
$this->Image('denuncia.png',40, .5, 9);
//Bloque 2: Domicilio y carros
$this->SetFont('Times','B',3);
$this->SetXY(39,8.5);
$this->SetTextColor(0,0,0);
$this->Cell(10.5,.3,'Domicilio',0,0,'R');
$this->SetFont('Times','B',6.5);
$this->SetXY(39,11.5);
$this->Cell(10.5,.3,'Cueva Santa',0,0,'R');
$this->SetFont('Times','B',6.5);
$this->SetXY(39,14.5);
$this->Cell(10.5,.3,'#54',0,0,'R');
$this->SetFont('Times','B',6.5);
$this->SetXY(39,17.5);
$this->Cell(10.5,.3,'Santuarios',0,0,'R');
$this->SetFont('Times','B',6.5);
$this->SetXY(39,20.5);
$this->Cell(10.5,.3,'Residenical',0,0,'R');
$this->SetFont('Times','B',6.5);
$this->SetXY(39,23.5);
$this->Cell(10.5,.3,'Qro. Qro.',0,0,'R');
$this->Image('carros.png',3,22, 45,12);
//Bloque 3: Restricciones, Sangre, Organos y Num Emergencia
$this->SetFont('Times','B',3);
$this->SetXY(.5,30);
$this->Cell(1.35,.3,'Restricciones',0,0,'L');
$this->SetFont('Times','B',3);
$this->SetXY(.5,32);
$this->Cell(1.35,.3,'NINGUNA',0,0,'L');
$this->SetFont('Times','B',3);
$this->SetXY(39,30);
$this->Cell(10.5,.3,'Grupo Sanguineo',0,0,'R');
$this->SetFont('Times','',6.5);
$this->SetXY(39,33);
$this->Cell(10.5,.3,'O+',0,0,'R');
$this->SetFont('Times','B',3);
$this->SetXY(39,36);
$this->Cell(10.5,.3,'Donador Organos',0,0,'R');
$this->SetFont('Times','',6.5);
$this->SetXY(39,39);
$this->Cell(10.5,.3,'Si',0,0,'R');
$this->SetFont('Times','B',3);
$this->SetXY(39,42);
$this->Cell(10.5,.3,'Numero de Emergencia',0,0,'R');
$this->SetFont('Times','',6.5);
$this->SetXY(39,45);
$this->Cell(10.5,.3,'4423869725',0,0,'R');
//Bloque 4: Firma y Secretario de Segu Ciudadana
$this->Image('firma.png', 37,48, 10);
$this->SetFont('Times','B',3.2);
$this->SetXY(40,57);
$this->Cell(10,.3,'MTRO. EN GPA. MIGUEL ANGEL CONTRERAS ALVAREZ',0,0,'R');
$this->SetFont('Times','B',3.2);
$this->SetXY(40,58.5);
$this->Cell(10,.3,'SECRETARIO DE SEGURIDAD CUIDADANA',0,0,'R');
//Bloque 5: Fundamento legal y logo 
$this->SetFont('Times','B',3);
$this->SetXY(.5,58.5);
$this->Cell(1.35,.3,'Fundamento Legal',0,0,'L');
$this->SetFont('Times','',3.2);
$this->SetXY(.5,60);
$this->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$this->SetFont('Times','',3.2);
$this->SetXY(.5,61);
$this->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$this->SetFont('Times','',3.2);
$this->SetXY(.5,62);
$this->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$this->SetFont('Times','',3.2);
$this->SetXY(.5,63);
$this->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$this->SetFont('Times','',3.2);
$this->SetXY(.5,64);
$this->Cell(1.35,.3,'TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto',0,0,'L');
$this->Image('logo-poder-ejecutivo.png', 23.5, 68, 28);//x,y,w,h

}
}

$pdf = new FPDF('P','mm',array(50,80));
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,2);
$pdf->contenido();
$pdf->Output();


?>