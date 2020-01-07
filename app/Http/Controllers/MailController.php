<?php

namespace App\Http\Controllers;

use App\email;
use App\Events\CampaignMailHasSent;
use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\campaign;

class MailController extends Controller
{
    public function index()
    {


        $data = email::latest()->first();

        return view('email.list',[
            'email' => $data->email
        ]);

    }

    public function store()
    {
       $validinfo = request()->validate([
           'email'=>'required'
        ]);
       $validinfo['user_id']=1;
       $validinfo['list_id']=1;

        email::create($validinfo);

        return redirect('/email');
    }


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

        $data = ['group'=>request()->group, 'time'=>request()->time,'msg'=>request()->msg];

        event(new CampaignMailHasSent($data));

        return back()->with('report','Mail sent successful');
    }
}
