<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestRedis;

class TestRedisController extends Controller
{
	public function send(Request $request)
	{
		TestRedis::dispatch('send');
	}
}
