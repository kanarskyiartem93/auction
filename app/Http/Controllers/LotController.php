<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
        return view('lot.index');
    }

    public function create()
    {
        return view('lot.create');
    }
}
