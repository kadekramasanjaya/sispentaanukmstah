<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiPaduansuaraModel;

class DokumentasiUkmPaduanSuaraController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiPaduansuaraModel = new DokumentasiPaduansuaraModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasipaduansuara' => $this->DokumentasiPaduansuaraModel->allData(),
        ];
        return view('ukmpaduansuara/dokumentasiukmpaduansuara', $data);
    }
}
