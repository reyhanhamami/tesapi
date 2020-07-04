<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wakif extends Model
{
    protected $table = 'databaru';
    protected $fillable = ['title','alias','content','created_at','updated_at'];

    // public $timestamps = false;
}
