<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TedUkmPmiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('ukmpmi/tedukmpmi');
    }
}
