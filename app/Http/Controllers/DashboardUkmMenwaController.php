<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenwaModel;

class DashboardUkmMenwaController extends Controller
{
    public function __construct()
    {
        $this->MenwaModel = new MenwaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'menwa' => $this->MenwaModel->allData(),
        ];
        return view('ukmmenwa/dashboardukmmenwa', $data);
    }
}