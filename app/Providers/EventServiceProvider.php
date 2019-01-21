<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\TestEvent;
use App\Listeners\TestListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listener = [
	TestEvent::class => [
		TestListener::class,
	],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
	    parent::boot();

	    Event::listen(TestEvent::class, TestListener::class);
    }
}
