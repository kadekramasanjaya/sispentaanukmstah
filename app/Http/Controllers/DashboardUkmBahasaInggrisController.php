<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahasaInggrisModel;

class DashboardUkmBahasaInggrisController extends Controller
{
    public function __construct()
    {
        $this->BahasaInggrisModel = new BahasaInggrisModel();
    }

    public function index()
    {
        $data = [
            'bahasainggris' => $this->BahasaInggrisModel->allData(),
        ];
        return view('ukmbahasainggris/dashboardukmbahasainggris', $data);
    }
}