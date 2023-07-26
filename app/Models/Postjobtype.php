<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postjobtype extends Model
{
    protected $table='postjob_type';
    use HasFactory;
    public function jobtype()
    {
        return $this->hasMany('App\Models\Job_type','id','jobtype_id')->select(['id','name']);
    }
}
