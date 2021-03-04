<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        echo nl2br("NIM : 1941720175 \n \n Nama : Aliyah Hanun S");
    }
}
