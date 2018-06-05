<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ThreadRepository{

    public static function get($id){
        $query = DB::table('threads')->where('id', '=', $id )->first();
        return $query;
    }

    public static function getList($input){
        $query = DB::table('threads')
            ->join('contacts', 'contacts.id', '=', 'threads.contact_id')
            ->select('threads.*', 'contacts.name as contact_name');
        if (isset($input['contact_id'])){
            $query = $query->where('threads.contact_id', '=', $input['contact_id']);

        }
        $query = $query->get();
        return $query;

    }

}