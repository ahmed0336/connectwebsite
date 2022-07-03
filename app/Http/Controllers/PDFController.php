<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('firstpdf', $data);
    
        // return $pdf->download('itsolutionstuff.pdf');
    }

    public function ahmedPDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        // $pdf = PDF::loadView('pdf.test_pdf')->setPaper('a4', 'landscape');
        $pdf = PDF::loadView('ahmedb', $data);
        // $pdf = PDF::loadView('ahmedb', $data)->setPaper('a4', 'landscape');;
        return $pdf->stream();
    
        // return $pdf->download('itsolutionstuff.pdf');
    }
}