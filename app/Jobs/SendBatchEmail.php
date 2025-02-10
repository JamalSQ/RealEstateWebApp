<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;

class SendBatchEmail implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // public $recipients = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->recipients = $recipients;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Log::info('in sendbatchemail handle method'); // Log the email 
        $email1 = "jsqphpdeveloper@gmail.com";
        $email2 = "qadrij688@gmail.com";

        $batch = Bus::batch([
            new SendBrokerAccountApprovedEmail($email1),
            new SendBrokerAccountApprovedEmail($email2),
        ])->dispatch();
    }
}
