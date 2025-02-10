<?php

namespace App\Listeners;

use App\Events\registeredUser;
use App\Models\admin;
use App\Notifications\newUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NotifyAdmin
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
        $admins = admin::all();
        Notification::send($admins, new newUserNotification($event->user));
    }
}
