<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurnalistikModel;

class DashboardUkmJurnalistikController extends Controller
{
    public function __construct()
    {
        $this->JurnalistikModel = new JurnalistikModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'jurnalistik' => $this->JurnalistikModel->allData(),
        ];
        return view('ukmjurnalistik/dashboardukjurnalistik', $data);
    }
}