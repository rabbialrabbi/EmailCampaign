<?php

namespace App\Http\Controllers;

use App\email;
use App\Events\CampaignMailHasSent;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\campaign;

class MailController extends Controller
{
    public function show()
    {
        return view('email.form');
    }

    public function send()
    {
        $validation = request()->validate([
           'group'=>'required',
           'time'=>'required',
           'msg'=>'required'
        ]);



        event(new CampaignMailHasSent(request()));

        return back()->with('report','Mail sent successful');
    }
}
