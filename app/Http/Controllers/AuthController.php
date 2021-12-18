<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119037,
            "Nama" => "Bagas Makhali",
            "Gender" => "Laki-laki",
            "Phone" => 6282313666691,
            "Kelas" => "XII RPL 2"
        ];

    }

}