<?php

require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf=new html2pdf();

ob_start();
require_once 'htmldibujo.php';
$html= ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output('pdfoube.pdf');
