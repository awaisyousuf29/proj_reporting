<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function pdf()
    {
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y'),
        //     'name' => 'ItSolutionStuff.com',
        //     'address' => 'Manila, PH',
        //     'phone' => '123-4567',
        //     ];
        // $pdf = Pdf::loadView('pdf.pdf',$data );
        // return $pdf->stream('report.pdf');
              $users = User::all();
        $pdf = Pdf::loadView('pdf.pdf', ['users' => $users]);

        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream();

        // return view('pdf.pdf');



        }

}
