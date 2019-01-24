<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestRoleController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$response = [];
		if ($user->hasRole('administrator|user|superadministrator')) {
			$response['global'] ='all see it';
		}

		if ($user->hasRole('administrator|superadministrator')) {
                        $response['administrators'] = 'adminstrators see it';
                }

		if ($user->hasRole('superadministrator')) {
                        $response['superadministrator'] = 'superadministrator see it';
		}

		return $response;

	}
}
