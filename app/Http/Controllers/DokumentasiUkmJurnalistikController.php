<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiJurnalistikModel;

class DokumentasiUkmJurnalistikController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiJurnalistikModel = new DokumentasiJurnalistikModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasijurnalistik' => $this->DokumentasiJurnalistikModel->allData(),
        ];
        return view('ukmjurnalistik/dokumentasiukmjurnalistik', $data);
    }
}
