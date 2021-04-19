<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DokumentasiMusikModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_dokumentasi_musik')->get();
    }
    public function detailData($id_dokumentasi_musik)
    {
        return DB::table('tbl_dokumentasi_musik')->where('id_dokumentasi_musik', $id_dokumentasi_musik)->first();
    }
    public function addData($id_dokumentasi_musik)
    {
        DB::table('tbl_dokumentasi_musik')->insert($id_dokumentasi_musik);
    }
    public function editdata($id_dokumentasi_musik, $data)
    {
        DB::table('tbl_dokumentasi_musik')
            ->where('id_dokumentasi_musik', $id_dokumentasi_musik)
            ->update($data);
    }
    public function deleteData($id_dokumentasi_musik)
    {
        DB::table('tbl_dokumentasi_musik')
            ->where('id_dokumentasi_musik', $id_dokumentasi_musik)
            ->delete();
    }
}