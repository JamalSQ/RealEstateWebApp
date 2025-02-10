<?php

namespace App\Listeners;

use App\Events\registeredUser;
use App\Mail\BrokerAccountApproved;
use App\Mail\EmailTemplete;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendwelcomeEmail
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
    public function handle(registeredUser $event)
    {
        Mail::to($event->user->email)->send(new EmailTemplete($event->user));
    }
}
