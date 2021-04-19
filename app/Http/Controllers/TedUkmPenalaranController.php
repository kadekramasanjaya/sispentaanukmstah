<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TedUkmPenalaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('ukmpenalaran/tedukmpenalaran');
    }
}
