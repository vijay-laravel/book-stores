<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use PDF;
use App\Models\User;

class PDFController extends Controller
{
    public function pdf_generate($user_id)
    {
        $user = User::where('id',$user_id)->first();
        if(empty($user))
            return 'User not found.';
        $pdf = PDF::loadView('book', compact('user'));
        return $pdf->stream();

    }
}
