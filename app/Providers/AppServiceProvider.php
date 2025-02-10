<?php

namespace App\Providers;

use App\Events\registeredUser;
use App\Listeners\logUserRegistered;
use App\Listeners\NotifyAdmin;
use App\Listeners\sendwelcomeEmail;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(registeredUser::class, sendwelcomeEmail::class);
        Event::listen(registeredUser::class, logUserRegistered::class);
        Event::listen(registeredUser::class, NotifyAdmin::class);
    }
}
