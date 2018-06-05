<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model 
{

    protected $table = 'threads';
    public $timestamps = false;
    protected $fillable = ['id'];

    public function getContacts()
    {
        return $this->belongsTo('Contact');
    }

    public function getActions()
    {
        return $this->hasMany('Action');
    }

}