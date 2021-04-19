<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenalaranModel;

class DashboardUkmPenalaranController extends Controller
{

    public function __construct()
    {
        $this->PenalaranModel = new PenalaranModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'penalaran' => $this->PenalaranModel->allData(),
        ];
        return view('ukmpenalaran/dashboardukmpenalaran', $data);
    }
}