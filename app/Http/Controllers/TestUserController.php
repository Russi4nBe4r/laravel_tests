<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\TestUserRedis;

class TestUserController extends Controller
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index(Request $request, int $id)
	{
		$user = $this->user->find($id);
		TestUserRedis::dispatch('sent by user <' . $user->id . '> ' . $user->name)->onQueue($user->event_token);
		return $user;
	}
}
