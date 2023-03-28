<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(93,10,' ',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(190,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
    $this->Ln(10);
    $this->Cell(190,5,'MINISTERIO DEL PODER POPULAR PARA LA  EDUCACUCION UNIVERSITARIA',0,0,'C');
    $this->Ln(10);
    $this->Cell(190,5,'UNIVERSIDAD NACIONAL EXPERIMENTAL PARA LAS',0,0,'C');
    $this->Ln(10);
    $this->Cell(190,5,'TELECOMUNICACION E  INFORMATICA',0,0,'C');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo().'/{1}'),0,0,'C');
}
}




$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'',0,'h');

$pdf->Cell(120,5,'                                                          CARTA DE POSTULACION PARA SERVICIO COMUNITARIO',0,'h');
$pdf->Cell(40,5,'',0,'h');

$pdf->Cell(40,5,utf8_decode('       Estimados representantes de la universidad experimental para las telecomunicaciones e informatica UNETI,    '),0,'h');
$pdf->Cell(40,5,utf8_decode('   por medio de la presente, solicitamos de manera explicita nuestro interes de convertirnos en participantes '),0,'h');
$pdf->Cell(40,5,utf8_decode('   del proyecto acreedor para cumplir con la Ley de Servicio Comunitario.  '),0,'h');

$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,utf8_decode('   Igualmente, manifestamos formalmente la ACEPTACIÓN del trabajo que realizaremos en dicha Organización/Institución: '),0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,utf8_decode('        Nombre: Organización/Institución _____________________________________________________________ '),0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,utf8_decode('       Participantes que se incorporan a las labores en la Organización o Institución: '),0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                    Nombre: _____________________________, portador de la CI: __________________ ',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                    Nombre: _____________________________, portador de la CI: __________________ ',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                    Nombre: _____________________________, portador de la CI: __________________ ',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                    Nombre: _____________________________, portador de la CI: __________________',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                    Nombre: _____________________________, portador de la CI: __________________',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,utf8_decode('       Quienes comenzarán sus labores, según plan de actividades y metas previamente acordado  (y firmado en anexo), '),0,'h');
$pdf->Cell(40,5,'       el ______ de _______________de 2023',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,utf8_decode('                 Esperamos que la comunicación se mantenga fluida y nos comprometemos a facilitar las condiciones en las '),0,'h');
$pdf->Cell(40,5,utf8_decode('       cuales trabajaremos en conjunto el alumno-organizacion/institucion, y asegurar un trabajo integro de mutuo respeto'),0,'h');
$pdf->Cell(40,5,utf8_decode('       en nuestras visitas a campo y la ejecución del plan de actividades y metas, así como monitorear el cumplimiento'),0,'h');
$pdf->Cell(40,5,utf8_decode('       de las horas de servicio acordadas.'),0,'h');
$pdf->Cell(40,5,'        ',0,'h');
$pdf->Cell(40,5,utf8_decode('       Sin más a qué hacer referencia y esperando los frutos de esta alianza. Se despide los abajo firmantes, '),0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'',0,'h');
$pdf->Cell(40,5,'                       _________________________     __________________________     ________________________',0,'h');
$pdf->Cell(40,5,utf8_decode('                               Estudiantes                               Organización/Institución                         UNETI'),0,'h');
$pdf->Output(); 
?>

