<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiPramukaModel;

class DokumentasiUkmPramukaController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiPramukaModel = new DokumentasiPramukaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasipramuka' => $this->DokumentasiPramukaModel->allData(),
        ];
        return view('ukmpramuka/dokumentasiukmpramuka', $data);
    }
}
