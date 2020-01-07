<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {

        return view('email.form');
    }

    public function show()
    {

        $age = Carbon::parse(now())->diff(request()->dob)->format('%y years %m month %d day');
        return view('email.form',[
            'name'=>request()->name,
            'age'=>$age,
        ]);
    }
}
