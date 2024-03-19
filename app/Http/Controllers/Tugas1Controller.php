<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas1Controller extends Controller
{
    //
    public function index()
    {
        $data = [
            [
                'nim' => '185150407111016',
                'nama' => 'Bagas Ramadhani Pratama', 
                'alamat' => 'Kota Malang',
                'hobi' => 'Gaming'
            ],
        ];

        return view('tugas1.index', compact('data'));
    }
}
