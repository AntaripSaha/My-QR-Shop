<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
public function index(){
 // Create a new mPDF object
 $pdf = new Mpdf();

 // Add a background image
 $imageFile = public_path('path/to/background/image.jpg');
 $pdf->SetWatermarkImage($imageFile);
 $pdf->showWatermarkImage = true;

 
 // Get the HTML content from a blade view file
 $html = view('pdf.index')->render();



 // Add your HTML content to the PDF
 $pdf->WriteHTML($html);

 // Output the PDF
 $pdf->Output();
   }
}
