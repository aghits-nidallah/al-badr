<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VisiDanMisi extends BaseController
{
    public function index()
    {
        return view('visi_dan_misi');
    }
}
