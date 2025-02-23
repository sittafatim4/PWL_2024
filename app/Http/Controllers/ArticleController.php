<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function hello($postId) {
        return 'Halaman Artikel dengan ID ' .$postId;
}
}
