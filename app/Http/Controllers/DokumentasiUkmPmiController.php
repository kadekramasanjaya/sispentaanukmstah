<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiPmiModel;

class DokumentasiUkmPmiController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiPmiModel = new DokumentasiPmiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasipmi' => $this->DokumentasiPmiModel->allData(),
        ];
        return view('ukmpmi/dokumentasiukmpmi', $data);
    }
}
