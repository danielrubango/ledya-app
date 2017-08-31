<?php

namespace App\Http\Controllers;

use PDF;
use App\Reservation;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function download(Reservation $reservation)
    {
        // return $reservation;
        // return view('home', compact('reservation'));

        $pdf = PDF::loadView('home', compact('reservation'));
        
        return $pdf->download('invoice.pdf');

    }
}
