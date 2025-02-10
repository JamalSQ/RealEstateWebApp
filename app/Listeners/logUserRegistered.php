<?php

namespace App\Listeners;

use App\Events\registeredUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class logUserRegistered
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
        Log::info("The user is registered with the name " . $event->user->name . " and the email is " . $event->user->email);
    }
}
