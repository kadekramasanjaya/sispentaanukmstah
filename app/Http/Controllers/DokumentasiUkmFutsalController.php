<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiFutsalModel;

class DokumentasiUkmFutsalController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiFutsalModel = new DokumentasiFutsalModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasifutsal' => $this->DokumentasiFutsalModel->allData(),
        ];
        return view('ukmfutsal/dokumentasiukmfutsal', $data);
    }
}
