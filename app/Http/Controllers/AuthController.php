<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            "NISN" => 3103119037,
            "Nama" => "Chika Nur Alifa",
            "Gender" => "Perempuan",
            "Phone" => 628121238239491,
            "Kelas" => "XII RPL 2"
        ];
    }
}
