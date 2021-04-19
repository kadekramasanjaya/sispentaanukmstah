<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiMusikModel;


class PortfolioMusikController extends Controller
{
    public function __construct()
    {

        $this->DokumentasiMusikModel = new DokumentasiMusikModel();
    }

    public function index()
    {
        $data = [
            'dokumentasiukmmusik' => $this->DokumentasiMusikModel->allData(),
        ];
        return view('ukmmusik\portfoliomusik', $data);
    }
}