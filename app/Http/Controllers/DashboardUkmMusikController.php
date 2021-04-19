<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\MusikModel;


class DashboardUkmMusikController extends Controller
{
    public function __construct()
    {

        $this->MusikModel = new MusikModel();
    }

    public function index()
    {
        $data = [
            'musik' => $this->MusikModel->allData(),
        ];
        return view('ukmmusik/dashboardukmmusik', $data);
    }
}