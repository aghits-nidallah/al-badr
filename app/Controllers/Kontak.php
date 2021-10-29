<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kontak extends BaseController
{
    public function index()
    {
        return view('kontak');
    }
}
