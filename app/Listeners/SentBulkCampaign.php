<?php

namespace App\Listeners;

use App\email;
use App\Mail\campaign;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SentBulkCampaign implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $emails = email::where([['user_id','=',1],['list_id','=',$event->data['group']]])->get();

        $time = now()->addDays($event->data['time']);

        foreach ($emails as $email){
            Mail::to($email)->later($time, new campaign($event->data['msg']));
        }

    }
}
