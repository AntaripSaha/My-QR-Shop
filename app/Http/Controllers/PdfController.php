<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PdfController extends Controller
{
  public function index(){
    return view ('pdf.index');
  }
  public function pdf()
  {
    ini_set('max_execution_time', 180); //3 minutes
    // Get the HTML content from the view
    $html = view('pdf.index')->render();
  
    // Find all img tags in the HTML
    $doc = new \DOMDocument();
    $doc->loadHTML($html);
    $images = $doc->getElementsByTagName('img');

    // Loop through each image and convert it to base64
    foreach ($images as $image) {
        $path = public_path() . $image->getAttribute('src');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $image->setAttribute('src', $base64);
      }

    // Save the modified HTML
    $html = $doc->saveHTML();

    // Create a new Dompdf instance
    $dompdf = new Dompdf();

    // Load the modified HTML into Dompdf
    $dompdf->loadHtml($html);

    // Set the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF (inline or as attachment)
    return $dompdf->stream('document.pdf');
  }
  
}
