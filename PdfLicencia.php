
<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera frontal
function HeaderFront()
{
    // Logo
    $this->Image('Coat_of_arms_of_Queretaro.png',5,2,6);
    // Tipo Letra
    $this->SetFont('Arial','',4);
    //Linea
    $this->SetXY(13,2);
    $this->Cell(0.05,7,"",1);
    //Leyendas
    $this->SetXY(13,0);
    $this->Cell(80,5,"Estados Unidos Mexicanos",0);
    $this->SetXY(13,1.5);
    $this->Cell(8,5,"Poder Ejecutivo del Estado de Queretaro",0);
    $this->SetFont('Arial','B',4);
    $this->SetXY(13,3.5);
    $this->Cell(8,5,"Secretaria de Seguridad Ciudadana",0);
    $this->SetFont('Arial','B',5);
    $this->SetXY(13,5.5);
    $this->Cell(8,5,"Licencia para Conducir",0);
}
//Conductor
function datosConductor(string $NumeroLic, string $Nombre, string $ApellidoPa, string $ApellidoMa){
    //foto de perfil
    $this->Image("jp.png",28,11,20);
    //No Licencia
    $this->SetFont('Arial','',2.5);
    $this->SetXY(19.5,24.5);
    $this->Cell(20,2,"No. de Licencia");

    $this->SetFont('Arial','B',4.5);
    $this->SetTextColor(200,0,0);
    $this->SetXY(16.6,26);
    $this->Cell(20,4,$NumeroLic);

    $this->SetFont('Arial','B',3.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(15.5,28);
    $this->Cell(20,4,"AUTOMOVILISTA");

    $this->SetFont('Arial','',2.5);
    $this->SetXY(44,32.5);
    $this->Cell(10,2,"Nombre");

    $this->SetFont('Arial','',4.5);
    $this->SetXY(39,34);
    $this->Cell(10,2,$ApellidoPa,0,0,"R");

    $this->SetFont('Arial','',4.5);
    $this->SetXY(39,36);
    $this->Cell(10,2,$ApellidoMa,0,0,"R");

    $this->SetFont('Arial','B',4.5);
    $this->SetXY(39,39);
    $this->Cell(10,2,$Nombre,0,0,"R");
}
function fechas($fechaNac,$fechaExp,$Validez,$Antiguedad)
{
    $this->SetFont('Arial','',2.5);
    $this->SetXY(39,40.5);
    $this->Cell(10,2,"Observaciones",0,0,"R");

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,41);
    $this->Cell(10,2,"Fecha de Nacimiento");

    $this->SetFont('Arial','',5);
    $this->SetXY(2,42.5);
    $this->Cell(10,2,$fechaNac);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,44.5);
    $this->Cell(10,2,"Fecha de Expedicion");

    $this->SetFont('Arial','',5);
    $this->SetXY(2,46);
    $this->Cell(10,2,$fechaExp);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,48);
    $this->Cell(10,2,"Valido hasta");

    $this->SetFont('Arial','',5);
    $this->SetXY(2,49.5);
    $this->Cell(10,2,$Validez);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,51.5);
    $this->Cell(10,2,"Antiguedad");

    $this->SetFont('Arial','',5);
    $this->SetXY(2,53);
    $this->Cell(10,2,$Antiguedad);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(20,48);
    $this->Cell(10,2,"Firma");

    $this->Image("firma.png",20,50,6,6);


}
// Pie frontal
function FooterFront($tipo)
{
    $this->SetFont('Arial','',5);
    $this->SetXY(3,56);
    $this->SetFillColor(255,255,0);
    $this->Cell(5,5,$tipo,0,0,"C",true);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(20,59);
    $this->Cell(10,2,"AUTORIZO QUE LA PRESENTE SEA",0,0,"C" );
    $this->SetXY(20,60);
    $this->Cell(10,2,"RECABADA COMO GARANTIA DE INFRACCION",0,0,"C" );


    $this->Image("bandera.png",35,56,14);
}

function HeaderBack(){
    $this->Image("telEmergencias.jpg",2,2,8);

    $this->Image("pill.png",14.5,1,20,6);

    $this->SetFont('Arial','B',5);
    $this->SetTextColor(255,255,255);
    $this->SetXY(15,3);
    $this->Cell(20,2,"B211571223",0,0,"C",false);
    

    $this->Image("denuncia.png",40,2,8);
}

function Domicilio($Calle,$Num,$Colonia,$CP,$Municipio)
{
    $this->SetFont('Arial','B',2.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(44,8);
    $this->Cell(5,2,"Domicilio",0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,9.5);
    $this->Cell(5,2,$Calle,0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,11);
    $this->Cell(5,2,$Num,0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,12.5);
    $this->Cell(5,2,$Colonia,0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,14);
    $this->Cell(5,2,$CP,0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,15.5);
    $this->Cell(5,2,$Municipio,0,0,"R");
    $this->Image("carros.png",2,10.5,47,18);
}

function MedioSegundo($Restricciones,$GrupoSanguineo,$Donador,$NumeroEmer)
{
    $this->SetFont('Arial','B',2.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(2,21);
    $this->Cell(5,2,"Restricciones",0,0,"");

    $this->SetFont('Arial','',4);
    $this->SetXY(2,22.5);
    $this->Cell(5,2,$Restricciones,0,0,"");

    $this->SetFont('Arial','B',2.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(44,21);
    $this->Cell(5,2,"Grupo Sanguineo",0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,22.5);
    $this->Cell(5,2,$GrupoSanguineo,0,0,"R");

    $this->SetFont('Arial','B',2.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(44,23.5);
    $this->Cell(5,2,"Donador de Organos",0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,25);
    $this->Cell(5,2,$Donador,0,0,"R");

    $this->SetFont('Arial','B',2.5);
    $this->SetTextColor(0,0,0);
    $this->SetXY(44,26.5);
    $this->Cell(5,2,"Numero de Emergencias",0,0,"R");

    $this->SetFont('Arial','',4);
    $this->SetXY(44,28);
    $this->Cell(5,2,$NumeroEmer,0,0,"R");
}
function FooterBack(){
    $this->Image("firma.png",28,32,15);

    $this->SetFont('Arial','',2.5);
    $this->SetXY(44,40);
    $this->Cell(5,2,"M. EN A.P. Juan Enrique Costas Navarro",0,0,"R");

    $this->SetFont('Arial','',2.5);
    $this->SetXY(44,41);
    $this->Cell(5,2,"SECRETARIO DE SEGURIDAD CIUDADANA",0,0,"R");
    
    $this->SetFont('Arial','B',2.5);
    $this->SetXY(2,42);
    $this->Cell(5,2,"Fundamento Legal",0,0); 

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,43);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,""); 

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,44);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,""); 
    
    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,45);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,""); 

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,46);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,""); 

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,47);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,""); 

    $this->SetFont('Arial','',2.5);
    $this->SetXY(2,48);
    $this->Cell(5,2,"BLABLABLABLALBALBLABLBLABLALBLBALBALABLABLABLABLABLALBALBLABLBLABLALBLBALBALABLA",0,0,"");

    

    $this->Image("escudo.png",25,55,25);

}
}


include("Controlador.php");
$SQL = "SELECT * FROM licenciacompleta WHERE idLicencia = 1234567";
$Con = Conectar();
$Result = Ejecutar($Con,$SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);



$pdf = new PDF('P','mm',array(50,70));
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->Image("fondo.jpg", 0, 0, 50, 70);
$pdf->HeaderFront();
$pdf->datosConductor("holodla","JUAN PABLO","COSTAS","RUEDA");
$pdf->fechas("29/07/2003","01/01/2020","01/01/2036","16");
$pdf->FooterFront("A");

$pdf->AddPage();
$pdf->HeaderBack();
$pdf->SetAutoPageBreak(false);
$pdf->Domicilio("Cueva Santa","54","Santuarios","76900","QUERETARO");
$pdf->MedioSegundo("NINGUNA","O+","SI","442-386-9725");
$pdf->FooterBack();
$pdf->Output();

?>