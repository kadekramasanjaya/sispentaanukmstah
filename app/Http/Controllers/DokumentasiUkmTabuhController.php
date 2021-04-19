<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiTabuhModel;

class DokumentasiUkmTabuhController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiTabuhModel = new DokumentasiTabuhModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasitabuh' => $this->DokumentasiTabuhModel->allData(),
        ];
        return view('ukmtabuh/dokumentasiukmtabuh', $data);
    }
}
