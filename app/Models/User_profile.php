<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $table='users_profile';
    public function category()
    {
        return $this->hasMany('App\Models\Job_category','id','job_category_id')->select(['name','id']);
    }
    use HasFactory;
}
