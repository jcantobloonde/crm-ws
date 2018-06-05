<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model 
{

    protected $table = 'actions';
    public $timestamps = false;
    protected $fillable = ['id'];

    public function getThread()
    {
        return $this->belongsTo('Thread');
    }

    public function getTypes()
    {
        return $this->belongsTo('Type');
    }

}