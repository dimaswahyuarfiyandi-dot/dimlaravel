<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloinformatikacontroller extends Controller
{
    //
    public function helloinformatika(): string{
        return view('helloinformatikaview');
    }
}
