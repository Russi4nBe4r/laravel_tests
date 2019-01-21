<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;

class TestEventController extends Controller
{
	private const PAGE = '/test/event/';

	public function index()
	{
		event(new TestEvent(self::PAGE));
		return self::PAGE;
	}
}
