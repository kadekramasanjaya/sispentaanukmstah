<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahasaInggrisModel;

class TedUkmBahasaInggrisController extends Controller
{
    public function __construct()
    {
        $this->BahasaInggrisModel = new BahasaInggrisModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'bahasainggris' => $this->BahasaInggrisModel->allData(),
        ];
        return view('ukmbahasainggris/tedukmbahasainggris', $data);
    }

    public function detail($id_bahasainggris)
    {
        if (!$this->BahasaInggrisModel->detailData($id_bahasainggris)) {
            abort(404);
        }
        $data = [
            'bahasainggris' => $this->BahasaInggrisModel->detailData($id_bahasainggris),
        ];
        return view('ukmbahasainggris\detailbahasainggris', $data);
    }
    public function addbahasainggris()
    {
        return view('/ukmbahasainggris/addbahasainggris');
    }
    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|unique:tbl_bahasainggris,nim|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nim.required' => 'nim wajib diisi !!',
            'nim.unique' => 'nim minimal 3 karakter !!',
        ]);

        // jika validasi tidak ada maka lakukan simpan data
        // upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('foto_bahasainggris'), $fileName);

        $data = [
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'prodi' => Request()->prodi,
            'jabatan' => Request()->jabatan,
            'status' => Request()->status,
            'foto' => $fileName,
        ];

        $this->BahasaInggrisModel->addData($data);
        return redirect()->route('tedukmbahasainggris')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function edit($id_bahasainggris)
    {
        if (!$this->BahasaInggrisModel->detailData($id_bahasainggris)) {
            abort(404);
        }
        $data = [
            'bahasainggris' => $this->BahasaInggrisModel->detailData($id_bahasainggris),
        ];
        return view('ukmbahasainggris/editbahasainggris', $data);
    }

    public function update($id_bahasainggris)
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
            $file->move(public_path('foto_bahasainggris'), $fileName);

            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
                'foto' => $fileName,
            ];

            $this->BahasaInggrisModel->editData($id_bahasainggris, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
            ];

            $this->BahasaInggrisModel->editData($id_bahasainggris, $data);
        }

        return redirect()->route('tedukmbahasainggris')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }
    public function delete($id_bahasainggris)
    {
        // hapus foto
        $data = $this->BahasaInggrisModel->detailData($id_bahasainggris);
        if ($data->foto <> "") {
            unlink(public_path('foto_bahasainggris') . '/' . $data->foto);
        }
        $this->BahasaInggrisModel->deleteData($id_bahasainggris);
        return redirect()->route('tedukmbahasainggris')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}