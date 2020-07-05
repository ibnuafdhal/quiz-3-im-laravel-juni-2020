<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function get_all()
    {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }
    public static function save($data)
    {
        unset($data["_token"]);
        $new_artikel = DB::table('artikel')->insert($data);
        return $new_artikel;
    }

}
