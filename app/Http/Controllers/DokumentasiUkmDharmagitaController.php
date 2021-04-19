<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiDharmagitaModel;

class DokumentasiUkmDharmagitaController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiDharmagitaModel = new DokumentasiDharmagitaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasidharmagita' => $this->DokumentasiDharmagitaModel->allData(),
        ];
        return view('ukmdharmagita/dokumentasiukmdharmagita', $data);
    }
}
