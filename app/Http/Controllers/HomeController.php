<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo nl2br("NIM : 1941720175 \n \n Nama : Aliyah Hanun S");
    }

    public function article($id) {
        echo "Halaman artikel dengan ID ". $id;
    }
}
