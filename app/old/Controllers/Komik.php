<?php

namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Komik extends BaseController
{
	public function index()
	{
		
        $data = [
            'title' => 'Daftar Komik'
        ];
        // echo view('layout/header',$data);
        return view('komik/index',$data);
        // echo view('layout/footer');
	}
}