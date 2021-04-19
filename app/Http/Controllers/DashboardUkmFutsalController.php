<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FutsalModel;

class DashboardUkmFutsalController extends Controller
{
    public function __construct()
    {
        $this->FutsalModel = new FutsalModel();
    }

    public function index()
    {
        $data = [
            'futsal' => $this->FutsalModel->allData(),
        ];
        return view('ukmfutsal/dashboardukmfutsal', $data);
    }
}