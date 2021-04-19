<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DharmaGitaModel;

class DashboardUkmDharmagitaController extends Controller
{
    public function __construct()
    {
        $this->DharmagitaModel = new DharmagitaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dharmagita' => $this->DharmagitaModel->allData(),
        ];
        return view('ukmdharmagita/dashboardukmdharmagita', $data);
    }
}