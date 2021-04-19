<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YogaModel;

class DashboardUkmYogaController extends Controller
{

    public function __construct()
    {
        $this->YogaModel = new YogaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'yoga' => $this->YogaModel->allData(),
        ];
        return view('ukmyoga/dashboardukmyoga', $data);
    }
}