<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BahasaInggrisModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_bahasainggris')->get();
    }
    public function detailData($id_bahasainggris)
    {
        return DB::table('tbl_bahasainggris')->where('id_bahasainggris', $id_bahasainggris)->first();
    }
    public function addData($id_bahasainggris)
    {
        DB::table('tbl_bahasainggris')->insert($id_bahasainggris);
    }
    public function editdata($id_bahasainggris, $data)
    {
        DB::table('tbl_bahasainggris')
            ->where('id_bahasainggris', $id_bahasainggris)
            ->update($data);
    }
    public function deleteData($id_bahasainggris)
    {
        DB::table('tbl_bahasainggris')
            ->where('id_bahasainggris', $id_bahasainggris)
            ->delete();
    }
}