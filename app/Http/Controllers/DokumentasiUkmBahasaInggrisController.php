<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiBahasainggrisModel;

class DokumentasiUkmBahasaInggrisController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiBahasaInggrisModel = new DokumentasiBahasaInggrisModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasiukmbahasainggris' => $this->DokumentasiBahasaInggrisModel->allData(),
        ];
        return view('ukmbahasainggris\dokumentasiukmbahasainggris', $data);
    }

    public function adddokumentasi()
    {
        return view('/ukmbahasainggris/adddokumentasi');
    }
    public function insert()
    {
        Request()->validate([
            'keterangan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],);

        // jika validasi tidak ada maka lakukan simpan data
        // upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('foto_bahasainggris/dokumentasi'), $fileName);

        $data = [
            'keterangan' => Request()->keterangan,
            'foto' => $fileName,
        ];

        $this->DokumentasiBahasaInggrisModel->addData($data);
        return redirect()->route('dokumentasiukmbahasainggris')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function edit($id_dokumentasi_bahasainggris)
    {
        if (!$this->DokumentasiBahasaInggrisModel->detailData($id_dokumentasi_bahasainggris)) {
            abort(404);
        }
        $data = [
            'dokumentasi' => $this->DokumentasiBahasaInggrisModel->detailData($id_dokumentasi_bahasainggris),
        ];
        return view('ukmbahasainggris/editdokumentasi', $data);
    }

    public function update($id_dokumentasi_bahasainggris)
    {
        Request()->validate([
            'keterangan' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],);

        // jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto <> "") {
            // jika ingin ganti foto
            // upload gambar/foto
            $file = Request()->foto;
            $fileName = Request()->nama . '.' . $file->extension();
            $file->move(public_path('foto_bahasainggris/dokumentasi'), $fileName);

            $data = [
                'keterangan' => Request()->keterangan,
                'foto' => $fileName,
            ];

            $this->DokumentasiBahasaInggrisModel->editData($id_dokumentasi_bahasainggris, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'keterangan' => Request()->keterangan,
            ];

            $this->DokumentasiBahasaInggrisModel->editData($id_dokumentasi_bahasainggris, $data);
        }

        return redirect()->route('dokumentasiukmbahasainggris')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }
    public function delete($id_dokumentasi_bahasainggris)
    {
        // hapus foto
        $data = $this->DokumentasiBahasaInggrisModel->detailData($id_dokumentasi_bahasainggris);
        if ($data->foto <> "") {
            unlink(public_path('/foto_bahasainggris/dokumentasi') . '/' . $data->foto);
        }
        $this->DokumentasiBahasaInggrisModel->deleteData($id_dokumentasi_bahasainggris);
        return redirect()->route('dokumentasiukmbahasainggris')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}