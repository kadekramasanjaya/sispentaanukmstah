<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeaterModel;

class DashboardUkmTeaterController extends Controller
{

    public function __construct()
    {
        $this->TeaterModel = new TeaterModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'teater' => $this->TeaterModel->allData(),
        ];
        return view('ukmteater/dashboardukmteater', $data);
    }
}