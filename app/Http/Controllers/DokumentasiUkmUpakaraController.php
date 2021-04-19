<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiUpakaraModel;

class DokumentasiUkmUpakaraController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiUpakaraModel = new DokumentasiUpakaraModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasiupakara' => $this->DokumentasiUpakaraModel->allData(),
        ];
        return view('ukmupakara/dokumentasiukmupakara', $data);
    }
}
