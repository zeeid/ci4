<?php

namespace App\Controllers\Detail; // ==== PENTING===

use App\Controllers\BaseController;

class Isi extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function isinya($url1=""){
		
        $data = [
            'title' => 'ABOUT',
            'title' => $url1,
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
        return view('detail/data',$data);
        // echo view('layout/footer');
	}
}
