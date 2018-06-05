<?php

namespace App;



use Illuminate\Http\Request;

class ActionService{

    public static function getList($input){
        return ActionRepository::getList($input);
    }

    public static function get($id){
        return ActionRepository::get($id);
    }

    public static function update($id = null, Request $request)
    {
        $action = Action::firstOrNew(['id' => $id]);
        $action->name=$request->get('name');
        $action->description=$request->get('description');
        $action->result=$request->get('result');
        $action->issue=$request->get('issue');
        $action->observations=$request->get('observations');
        $action->type_id=$request->get('type_id');
        $action->thread_id=$request->get('thread_id');
        $action->save();

        return $action;
    }
}