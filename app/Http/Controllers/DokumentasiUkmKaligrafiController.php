<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiKaligrafiModel;

class DokumentasiUkmKaligrafiController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiKaligrafiModel = new DokumentasiKaligrafiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasikaligrafi' => $this->DokumentasiKaligrafiModel->allData(),
        ];
        return view('ukmkaligrafi/dokumentasiukmkaligrafi', $data);
    }
}
