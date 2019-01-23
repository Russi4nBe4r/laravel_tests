<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
	public function send()
	{
		$objSender = new \stdClass();
		$objSender->server = 'buhojmedved.ru';
		Mail::to("maxterek97@gmail.com")->send(new TestMail($objSender));
	}
}
