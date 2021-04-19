<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaduanSuaraModel;

class DashboardUkmPaduanSuaraController extends Controller
{
    public function __construct()
    {
        $this->PaduanSuaraModel = new PaduanSuaraModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'paduanSuara' => $this->PaduanSuaraModel->allData(),
        ];
        return view('ukmpaduansuara/dashboardukmpaduansuara', $data);
    }
}