<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabuhModel;

class DashboardUkmTabuhController extends Controller
{

    public function __construct()
    {
        $this->TabuhModel = new TabuhModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'tabuh' => $this->TabuhModel->allData(),
        ];
        return view('ukmtabuh/dashboardukmtabuh', $data);
    }
}