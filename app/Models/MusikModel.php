<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MusikModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_musik')->get();
    }
    public function detailData($id_musik)
    {
        return DB::table('tbl_musik')->where('id_musik', $id_musik)->first();
    }
    public function addData($id_musik)
    {
        DB::table('tbl_musik')->insert($id_musik);
    }
    public function editdata($id_musik, $data)
    {
        DB::table('tbl_musik')
            ->where('id_musik', $id_musik)
            ->update($data);
    }
    public function deleteData($id_musik)
    {
        DB::table('tbl_musik')
            ->where('id_musik', $id_musik)
            ->delete();
    }
}