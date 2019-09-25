<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MPDF;

class ReportsController extends Controller
{
    public function pdf()
    {
        $pdf = MPDF::loadView('reports.pdf', []);
        return $pdf->stream('test.pdf');
    }
}
