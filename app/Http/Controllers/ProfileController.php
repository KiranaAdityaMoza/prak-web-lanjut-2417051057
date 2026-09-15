<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'Nama' => 'Kirana Aditya Moza',
            'NPM' => '2417051057',
            'Kelas' => 'Ilmu Komputer A'
        ];
        return view('profile', $data);
    }
}
