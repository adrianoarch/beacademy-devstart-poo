<?php

include 'vendor/autoload.php';


use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($i = 0; $i < 10; $i++) {
    $html .= '<p>Paragrafo ' . $i . '</p>';
}


$dompdf->loadHtml('<h1>Hello World, estou aprendendo PHP</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
