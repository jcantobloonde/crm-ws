<?php

namespace App;



use Illuminate\Http\Request;

class ContactService{

    public static function getList($input){
        return ContactRepository::getList($input);
    }

    public static function get($id){
        return ContactRepository::get($id);
    }

    public static function update($id = null, Request $request)
    {
        $contact = Contact::firstOrNew(['id' => $id]);
        $contact->name=$request->get('name');
        $contact->surname=$request->get('surname');
        $contact->email=$request->get('email');
        $contact->role=$request->get('role');
        $contact->main_contact=$request->get('main_contact');
        $contact->company_id=$request->get('company_id');
        $contact->save();
        
        return $contact;
    }
}