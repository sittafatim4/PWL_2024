<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function SelamatDatang()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Fatima Sitta Maulidia <br>
        NIM : 2341760167';
    }

    public function articles($id)
    {
        return 'Id ke- ' . $id;
    }
}
