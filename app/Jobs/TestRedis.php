<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class TestRedis implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $toLog;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($toLog)
    {
        $this->toLog = $toLog;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
	    Log::channel('redis')->info('Queued log: ' . $this->toLog);
    }
}
