<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TedUkmTabuhController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('ukmtabuh/tedukmtabuh');
    }
}
