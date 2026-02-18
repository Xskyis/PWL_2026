<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM: 244107020001, Nama: Achmad Nabil Afgareza';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID '. '<b>'.$id.'</b>';
    }
}
