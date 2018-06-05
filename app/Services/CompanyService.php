<?php

namespace App;



use Illuminate\Http\Request;

class CompanyService{

    public static function getList(){
        return CompanyRepository::getList();
    }

    public static function get($id){
        return CompanyRepository::get($id);
    }

    public static function update($id = null, Request $request)
    {
        $company = Company::firstOrNew(['id' => $id]);
        $company->name=$request->get('name');
        $company->save();

        return $company;
    }
}