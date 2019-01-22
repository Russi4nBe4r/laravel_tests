<?php

namespace TestLibs;

class TestLib
{
	private const LIB_NAME = 'TestLib';

	public function returnLibName()
	{
		return self::LIB_NAME;
	}
}
