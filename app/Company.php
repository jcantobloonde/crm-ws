<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model 
{

    protected $table = 'companies';
    public $timestamps = false;
    protected $fillable = ['id'];

    public function getContacts()
    {
        return $this->hasMany('Contact');
    }

}