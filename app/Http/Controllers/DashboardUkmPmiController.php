<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PmiModel;

class DashboardUkmPmiController extends Controller
{
    public function __construct()
    {
        $this->PmiModel = new PmiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pmi' => $this->PmiModel->allData(),
        ];
        return view('ukmpmi/dashboardukmpmi', $data);
    }
}