<?php
// Cargar la biblioteca FPDF (debes descargarla e incluirla en tu proyecto)
require('../assets/fpdf/fpdf.php');

// Crear una nueva instancia de la clase FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Definir la fuente y el tamaño
$pdf->SetFont('Arial', 'B', 16);

// Agregar un título
$pdf->Cell(0, 10, 'Tabla de Ejemplo', 0, 1, 'C');

// Crear una tabla con 3 columnas y 5 filas
for ($i = 1; $i <= 5; $i++) {
    $pdf->Cell(40, 10, 'Columna 1 - Fila ' . $i, 1);
    $pdf->Cell(40, 10, 'Columna 2 - Fila ' . $i, 1);
    $pdf->Cell(40, 10, 'Columna 3 - Fila ' . $i, 1);
    $pdf->Ln(); // Salto de línea
}

// Generar el archivo PDF
$pdf->Output('tabla_ejemplo.pdf', 'D'); // Descargar el archivo

// Puedes ajustar el contenido de la tabla según tus necesidades
?>
