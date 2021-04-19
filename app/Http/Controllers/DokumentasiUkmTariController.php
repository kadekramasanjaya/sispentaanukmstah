<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiTariModel;

class DokumentasiUkmTariController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiTariModel = new DokumentasiTariModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasitari' => $this->DokumentasiTariModel->allData(),
        ];
        return view('ukmtari/dokumentasiukmtari', $data);
    }
}
