<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Nazwa Nurul Wijaya, NIM: 2341760045';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}