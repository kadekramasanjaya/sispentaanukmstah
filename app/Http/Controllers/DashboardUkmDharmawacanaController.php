<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DharmaWacanaModel;

class DashboardUkmDharmawacanaController extends Controller
{
    public function __construct()
    {
        $this->DharmawacanaModel = new DharmawacanaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dharmawacana' => $this->DharmawacanaModel->allData(),
        ];
        return view('ukmdharmawacana/dashboardukmdharmawacana', $data);
    }
}