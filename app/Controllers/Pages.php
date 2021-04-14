<?php

namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Pages extends BaseController
{
	public function index()
	{
		
        $data = [
            'title' => 'HOME',
            'tes' => ['sat','dua','tiga']
        ];
        // echo view('layout/header',$data);
        return view('pages/home',$data);
        // echo view('layout/footer');
	}

    public function about(){
        
        $data = [
            'title' => 'ABOUT',
            'alamat'=>[
                [
                    'tipe'=>'Rumah',
                    'jalan'=>'Jl 12133'
                ],[
                    'tipe'=>'Kantor',
                    'jalan'=>'Jl 9999 '
                ]
            ]
        ];
        // echo view('layout/header',$data);
        return view('pages/about',$data);
        // echo view('layout/footer');
    }

	
}
