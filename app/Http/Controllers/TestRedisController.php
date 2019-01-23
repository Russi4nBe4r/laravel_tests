<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestRedis;
use App\Models\User;
use Predis\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TestRedisController extends Controller
{
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function send(Request $request)
	{
		TestRedis::dispatch('send');
		$token = Auth::user()->event_token;
		$this->client->rpush($token . ':data', 'sended by me');
	}

	public function response(Request $request)
	{
		$response = response()->streamDownload(function () {
			$token = Auth::user()->event_token;
			$data = $this->client->rpop($token . ':data');
			while ($data !== null) {
				echo 'data: ' . $data . "\n\n";
				Log::info($data);
				$data = $this->client->rpop($token . ':data');
			}
		});

		$response->headers->set('Content-Type', 'text/event-stream');
		$response->headers->set('X-Accel-Buffering', 'no');
		$response->headers->set('Cach-Control', 'no-cache');
		return $response;
	}

	public function recive()
	{
		return view('response');
	}
}
