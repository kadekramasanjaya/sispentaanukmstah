<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiDharmawacanaModel;

class DokumentasiUkmDharmawacanaController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiDharmawacanaModel = new DokumentasiDharmawacanaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasidharmawacana' => $this->DokumentasiDharmawacanaModel->allData(),
        ];
        return view('ukmdharmawacana/dokumentasiukmdharmawacana', $data);
    }
}
