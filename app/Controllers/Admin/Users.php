<?php

namespace App\Controllers\Admin; // ==== PENTING===

use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function about($nama="",$umur=""){
		echo "halo $nama";
	}
}
