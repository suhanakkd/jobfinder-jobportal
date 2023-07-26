<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply_now extends Model
{
    protected $table='apply_now';
    use HasFactory;
    public function profile()
    {
        return $this->hasMany('App\Models\User','id','user_id')->select(['name','id']);
    }
    public function job()
    {
        return $this->hasMany('App\Models\Job_posting','id','job_post_id')->select(['job_tittle','id']);
    }
}
