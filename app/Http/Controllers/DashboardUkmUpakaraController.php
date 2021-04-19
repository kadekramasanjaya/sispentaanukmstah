<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpakaraModel;

class DashboardUkmUpakaraController extends Controller
{

    public function __construct()
    {
        $this->UpakaraModel = new UpakaraModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'upakara' => $this->UpakaraModel->allData(),
        ];
        return view('ukmupakara/dashboardukmupakara', $data);
    }
}