<?php

namespace App;

use Illuminate\Http\Request;

class ThreadService{
    
    public static function getList($input){
       return ThreadRepository::getList($input);
    }

    public static function get($id){
        return ThreadRepository::get($id);
    }

    public static function update($id = null, Request $request)
    {
        $thread = Thread::firstOrNew(['id' => $id]);
        $thread->name=$request->get('name');
        $thread->description=$request->get('description');
        $thread->status=$request->get('status');
        $thread->interest=$request->get('interest');
        $thread->source=$request->get('source');
        $thread->contact_id=$request->get('contact_id');
        $thread->save();

        return $thread;
    }
}