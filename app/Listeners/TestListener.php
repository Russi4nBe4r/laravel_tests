<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Support\Facades\Log;

class TestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
	    Log::info('Event of open page: ' . $event->page);
    }
}
