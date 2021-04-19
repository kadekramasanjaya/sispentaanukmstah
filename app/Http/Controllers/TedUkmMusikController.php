<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MusikModel;

class TedUkmMusikController extends Controller
{
    public function __construct()
    {
        $this->MusikModel = new MusikModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'musik' => $this->MusikModel->allData(),
        ];
        return view('ukmmusik\tedukmmusik', $data);
    }

    public function detail($id_musik)
    {
        if (!$this->MusikModel->detailData($id_musik)) {
            abort(404);
        }
        $data = [
            'musik' => $this->MusikModel->detailData($id_musik),
        ];

        return view('ukmmusik\detailmusik', $data);
    }
    public function addmusik()
    {
        return view('/ukmmusik/addmusik');
    }
    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|unique:tbl_musik,nim|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nim.required' => 'nim wajib diisi !!',
            'nim.unique' => 'nim minimal 3 karakter !!',
        ]);

        // jika validasi tidak ada maka lakukan simpan data
        // upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('foto_musik'), $fileName);

        $data = [
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'prodi' => Request()->prodi,
            'jabatan' => Request()->jabatan,
            'status' => Request()->status,
            'foto' => $fileName,
        ];

        $this->MusikModel->addData($data);
        return redirect()->route('tedukmmusik')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function edit($id_musik)
    {
        if (!$this->MusikModel->detailData($id_musik)) {
            abort(404);
        }
        $data = [
            'musik' => $this->MusikModel->detailData($id_musik),
        ];
        return view('ukmmusik/editmusik', $data);
    }

    public function update($id_musik)
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nim.required' => 'nim wajib diisi !!',
        ]);

        // jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto <> "") {
            // jika ingin ganti foto
            // upload gambar/foto
            $file = Request()->foto;
            $fileName = Request()->nama . '.' . $file->extension();
            $file->move(public_path('foto_musik'), $fileName);

            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
                'foto' => $fileName,
            ];

            $this->MusikModel->editData($id_musik, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
            ];

            $this->MusikModel->editData($id_musik, $data);
        }

        return redirect()->route('tedukmmusik')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }
    public function delete($id_musik)
    {
        // hapus foto
        $data = $this->MusikModel->detailData($id_musik);
        if ($data->foto <> "") {
            unlink(public_path('foto_musik') . '/' . $data->foto);
        }
        $this->MusikModel->deleteData($id_musik);
        return redirect()->route('tedukmmusik')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}