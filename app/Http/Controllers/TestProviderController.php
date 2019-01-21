<?php

namespace App\Http\Controllers;

use App\Services\IService;

class TestProviderController extends Controller
{
	private $service;

	public function __construct(IService $service)
	{
		$this->service = $service;
	}

	public function index()
	{
		return $this->service->returnServiceName();
	}
}
