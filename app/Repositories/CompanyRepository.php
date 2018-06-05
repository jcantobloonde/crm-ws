<?php

namespace App;

use Illuminate\Support\Facades\DB;

class CompanyRepository{

    public static function get($id){
        $query = DB::table('companies')->where('id', '=', $id )->first();
        return $query;
    }

    public static function getList(){
        $query = DB::table('companies')
            ->select('companies.*')->get();
        return $query;

    }


}