<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiMusikModel;

class DokumentasiUkmMusikController extends Controller
{
    public function __construct()
    {
        $this->DokumentasiMusikModel = new DokumentasiMusikModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'dokumentasiukmmusik' => $this->DokumentasiMusikModel->allData(),
        ];
        return view('ukmmusik\dokumentasiukmmusik', $data);
    }

    public function adddokumentasi()
    {
        return view('/ukmmusik/adddokumentasi');
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
        $fileName = Request()->keterangan . '.' . $file->extension();
        $file->move(public_path('foto_musik/dokumentasi'), $fileName);

        $data = [
            'keterangan' => Request()->keterangan,
            'foto' => $fileName,
        ];

        $this->DokumentasiMusikModel->addData($data);
        return redirect()->route('dokumentasiukmmusik')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function edit($id_dokumentasi_musik)
    {
        if (!$this->DokumentasiMusikModel->detailData($id_dokumentasi_musik)) {
            abort(404);
        }
        $data = [
            'dokumentasi' => $this->DokumentasiMusikModel->detailData($id_dokumentasi_musik),
        ];
        return view('ukmmusik/editdokumentasi', $data);
    }

    public function update($id_dokumentasi_musik)
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
            $file->move(public_path('foto_musik/dokumentasi'), $fileName);

            $data = [
                'keterangan' => Request()->keterangan,
                'foto' => $fileName,
            ];

            $this->DokumentasiMusikModel->editData($id_dokumentasi_musik, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'keterangan' => Request()->keterangan,
            ];

            $this->DokumentasiMusikModel->editData($id_dokumentasi_musik, $data);
        }

        return redirect()->route('dokumentasiukmmusik')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }
    public function delete($id_dokumentasi_musik)
    {
        // hapus foto
        $data = $this->DokumentasiMusikModel->detailData($id_dokumentasi_musik);
        if ($data->foto <> "") {
            unlink(public_path('/foto_musik/dokumentasi') . '/' . $data->foto);
        }
        $this->DokumentasiMusikModel->deleteData($id_dokumentasi_musik);
        return redirect()->route('dokumentasiukmmusik')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}