<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ContactRepository{
    
    public static function get($id){
        $query = DB::table('contacts')->where('id', '=', $id )->first();
        return $query;
    }

    public static function getList($input){
        $query = DB::table('contacts')
            ->join('companies', 'companies.id', '=', 'contacts.company_id')
            ->select('contacts.*', 'companies.name as company_name');
        if (isset($input['company_id'])){
            $query = $query->where('contacts.company_id', '=', $input['company_id']);

        }
        $query = $query->get();
        return $query;

    }
}