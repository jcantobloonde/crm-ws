<?php

namespace App;


class TypeService{

    public static function getList(){
        return TypeRepository::getList();
    }

    public static function get($id){
        return TypeRepository::get($id);
    }
}