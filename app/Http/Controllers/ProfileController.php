<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'Nama' => 'Athallah Wildan Rafi',
            'NPM' => '2417051004',
            'Kelas' => 'Kelas A'
        ];
        return view('profile', $data);
    }
}
