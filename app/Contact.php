<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = ['id'];

    public function getCompany()
    {
        return $this->belongsTo('Company');
    }

    public function getThread()
    {
        return $this->hasMany('Thread');
    }

}