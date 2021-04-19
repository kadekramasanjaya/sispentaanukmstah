<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PramukaModel;

class DashboardUkmPramukaController extends Controller
{

    public function __construct()
    {
        $this->PramukaModel = new PramukaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pramuka' => $this->PramukaModel->allData(),
        ];
        return view('ukmpramuka/dashboardukmpramuka', $data);
    }
}