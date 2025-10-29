<?php
include '../db.php'; // Database connection
require_once('../tcpdf/tcpdf.php');

// Get user ID
if (!isset($_GET['id'])) {
    die("User ID not specified.");
}

$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

if (!$result || mysqli_num_rows($result) === 0) {
    die("User not found.");
}

$row = mysqli_fetch_assoc($result);

// Create new PDF
$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Workshop Team');
$pdf->SetTitle('Certificate');
$pdf->SetMargins(20, 30, 20);
$pdf->AddPage();

// Add logo on top-left (adjust position and size)
$logoPath = '../certificate/logo.png';
if (file_exists($logoPath)) {
    $pdf->Image($logoPath, 15, 10, 35, 35, '', '', '', false, 300);
}

// Set font
$pdf->SetFont('helvetica', '', 12);

// Certificate content
$html = '
<style>
    .title {
        font-size: 32px;
        text-align: center;
        color: #4B0082;
        font-weight: bold;
        margin-top: 40px;
    }
    .cert-body {
        font-size: 18px;
        text-align: center;
        margin-top: 40px;
        color: #333;
    }
    .name {
        font-size: 24px;
        font-weight: bold;
        color: #000;
        margin: 15px 0;
    }
    .footer {
        margin-top: 60px;
        text-align: center;
        font-size: 16px;
    }
</style>

<div class="title">Certificate of Participation</div>

<div class="cert-body">
    <p>This is to certify that</p>
    <p class="name">' . htmlspecialchars($row['name']) . '</p>
    <p>from <strong>' . htmlspecialchars($row['college']) . '</strong></p>
    <p>has successfully participated in the Technical Workshop conducted by the Department of Computer Applications, BIT.</p>
</div>

<div class="footer">
    <p>__________________________</p>
    <p><strong>Workshop Coordinator</strong></p>
</div>
';

// Output HTML
$pdf->writeHTML($html, true, false, true, false, '');

// Save to file
$filename = __DIR__ . "/../certificate/cert_" . $row['id'] . ".pdf";
$pdf->Output($filename, 'F');

// Confirmation message
echo "<p style='text-align:center; font-family:sans-serif; font-size:18px;'>Certificate generated successfully. 
<a href='$filename' target='_blank'>Download Certificate</a></p>";
?>
