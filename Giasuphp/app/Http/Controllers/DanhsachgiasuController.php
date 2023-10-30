<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhsachgiasuController extends Controller
{
    public function danhsachgiasu()
    {
        return view('admin.danhsachgiasu');
    }
}
