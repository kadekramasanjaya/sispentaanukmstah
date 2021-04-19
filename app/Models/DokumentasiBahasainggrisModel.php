<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DokumentasiBahasainggrisModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_dokumentasi_bahasainggris')->get();
    }
    public function detailData($id_dokumentasi_bahasainggris)
    {
        return DB::table('tbl_dokumentasi_bahasainggris')->where('id_dokumentasi_bahasainggris', $id_dokumentasi_bahasainggris)->first();
    }
    public function addData($id_dokumentasi_bahasainggris)
    {
        DB::table('tbl_dokumentasi_bahasainggris')->insert($id_dokumentasi_bahasainggris);
    }
    public function editdata($id_dokumentasi_bahasainggris, $data)
    {
        DB::table('tbl_dokumentasi_bahasainggris')
            ->where('id_dokumentasi_bahasainggris', $id_dokumentasi_bahasainggris)
            ->update($data);
    }
    public function deleteData($id_dokumentasi_bahasainggris)
    {
        DB::table('tbl_dokumentasi_bahasainggris')
            ->where('id_dokumentasi_bahasainggris', $id_dokumentasi_bahasainggris)
            ->delete();
    }
}
