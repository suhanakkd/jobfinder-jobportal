<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table='districts';
    use HasFactory;
    public function data()
    {
        return $this->hasMany('App\Models\State','id','state_id')->select(['name','id']);
    }
}
