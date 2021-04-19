<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiTeaterModel;

class DokumentasiUkmTeaterController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiTeaterModel = new DokumentasiTeaterModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasiteater' => $this->DokumentasiTeaterModel->allData(),
        ];
        return view('ukmteater/dokumentasiukmteater', $data);
    }
}
