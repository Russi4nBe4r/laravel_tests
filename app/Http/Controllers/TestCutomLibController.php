<?php

namespace App\Http\Controllers;

use TestLibs\TestLib;

class TestCutomLibController extends Controller
{
	private $lib;

	public function __construct(TestLib $lib)
	{
		$this->lib = $lib;
	}

	public function index()
	{
		return $this->lib->returnLibName();
	}
}
