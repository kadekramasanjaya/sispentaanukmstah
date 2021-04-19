<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiYogaModel;

class DokumentasiUkmYogaController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiYogaModel = new DokumentasiYogaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasiyoga' => $this->DokumentasiYogaModel->allData(),
        ];
        return view('ukmyoga/dokumentasiukmyoga', $data);
    }
}
