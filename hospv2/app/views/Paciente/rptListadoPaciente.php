<?php


//Incluímos a la clase PDF_MC_Table

require_once  APPROOT . '\views\fpdf184\PDF_MC_Table_ok.php';


//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();
$pdf->AliasNbPages();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
$pdf->Cell(100, 6, 'Listado Paciente ', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(58, 6, 'Nombre', 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('Apellido'), 1, 0, 'C', 1);
$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(58, 50, 30, 12, 35));

foreach ($data as $paciente) {

    $nombre = $paciente->nombrePaciente;
    $apellido = $paciente->apellidosPaciente;


    $pdf->SetFont('Arial', '', 10);

    $pdf->Row(array($nombre, $apellido));
};

$pdf->footer();
//Mostramos el documento pdf
$pdf->Output('I');
