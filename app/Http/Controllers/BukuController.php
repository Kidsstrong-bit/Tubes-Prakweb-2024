<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->model = Buku::class;
    }
}