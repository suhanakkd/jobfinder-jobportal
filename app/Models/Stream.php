<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $table='streams';

    use HasFactory;
    public function data()
    {
        return $this->hasMany('App\Models\Graduation','id','degree_id')->select(['name','id']);
    }
}
