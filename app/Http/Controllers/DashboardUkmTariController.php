<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TariModel;

class DashboardUkmTariController extends Controller
{

    public function __construct()
    {
        $this->TariModel = new TariModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'tari' => $this->TariModel->allData(),
        ];
        return view('ukmtari/dashboardukmtari', $data);
    }
}