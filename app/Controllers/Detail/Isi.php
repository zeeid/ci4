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
            'title' => $url1,
            'judul' => 'A10 Hdrenaline fuelled activities that will chase the post summer blues away',
            'pembuat' => 'Mark WillyA',
            'create_at' => 'Jan 10, 20171',
            'tagnya' => 'APEL',
            'konten' => 'isi KONTEN',
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
