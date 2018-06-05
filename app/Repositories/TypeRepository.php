<?php

namespace App;

use Illuminate\Support\Facades\DB;

class TypeRepository{
    
    public static function get($id){
        $query = DB::table('types')->where('id', '=', $id )->first();
        return $query;
    }

    public static function getList(){
        $query = DB::table('types')
            ->select('types.*')->get();
        return $query;

    }
}