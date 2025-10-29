<?php
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->Write(0, 'Hello from TCPDF!');
$pdf->Output('test.pdf', 'I');
?>
