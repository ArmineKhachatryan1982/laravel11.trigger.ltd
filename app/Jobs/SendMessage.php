<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $message;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->message = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info($this->message);
    }
}
