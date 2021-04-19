<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TedUkmDharmagitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('ukmdharmagita/tedukmdharmagita');
    }
}
