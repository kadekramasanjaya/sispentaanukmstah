<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiPenalaranModel;

class DokumentasiUkmPenalaranController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiPenalaranModel = new DokumentasiPenalaranModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasipenalaran' => $this->DokumentasiPenalaranModel->allData(),
        ];
        return view('ukmpenalaran/dokumentasiukmpenalaran', $data);
    }
}
