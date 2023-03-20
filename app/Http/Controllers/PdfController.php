<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index_old() 
    {
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];

        // return $pdf->download('itsolutionstuff.pdf');
        return view('pdf.sample');
    }

    public function index() 
    {
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];

        $pdf = PDF::loadView('pdf.sample', $data);

        return $pdf->stream('itsolutionstuff.pdf');

        return $pdf->download('itsolutionstuff.pdf');
    }
}
