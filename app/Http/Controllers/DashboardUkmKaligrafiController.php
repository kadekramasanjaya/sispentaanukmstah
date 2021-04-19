<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaligrafiModel;

class DashboardUkmKaligrafiController extends Controller
{
    public function __construct()
    {
        $this->KaligrafiModel = new KaligrafiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kaligrafi' => $this->KaligrafiModel->allData(),
        ];
        return view('ukmkaligrafi/dashboardukmkaligrafi', $data);
    }
}