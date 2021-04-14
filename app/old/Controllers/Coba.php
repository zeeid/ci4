<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function about($nama="",$umur=""){
		echo "halo $nama";
	}
}
