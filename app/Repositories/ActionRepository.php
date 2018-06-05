<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ActionRepository{

    public static function get($id){
        $query = DB::table('actions')->where('id', '=', $id )->first();
        return $query;
    }

    public static function getList($input){
        $query = DB::table('actions')
            ->join('threads', 'threads.id', '=', 'actions.thread_id')
            ->join('types', 'types.id', '=', 'actions.type_id')
            ->select('actions.*', 'threads.name as thread_name', 'types.name as type_name');
        if (isset($input['thread_id'])){
            $query = $query->where('actions.thread_id', '=', $input['thread_id']);
            
        } else if(isset($input['type_id'])){
            $query = $query->where('actions.type_id', '=', $input['type_id']);
        }
        $query = $query->get();
        return $query;

    }
}