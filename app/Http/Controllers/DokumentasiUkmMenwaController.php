<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiMenwaModel;

class DokumentasiUkmMenwaController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiMenwaModel = new DokumentasiMenwaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasimenwa' => $this->DokumentasiMenwaModel->allData(),
        ];
        return view('ukmmenwa/dokumentasiukmmenwa', $data);
    }
}
