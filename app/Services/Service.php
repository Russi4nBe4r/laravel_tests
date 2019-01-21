<?php

namespace App\Services;

use App\Services\IService;

class Service implements IService
{
	private const SERVICE_NAME = 'Service';

	public function returnServiceName()
	{
		return self::SERVICE_NAME;
	}
}
