<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_posting extends Model
{
    protected $table='job_postings';
    use HasFactory;
    public function data()
    {
        return $this->hasMany('App\Models\Firm_detail','id','company_id')->select(['image','id','name']);
    }
    public function data1()
    {
        return $this->hasMany('App\Models\State','id','state_id')->select(['name','id']);
    }
    public function data2()
    {
        return $this->hasMany('App\Models\District','id','district_id')->select(['name','id']);
    }
    public function data3()
    {
        return $this->hasMany('App\Models\Job_category','id','job_category_id')->select(['name','id']);
    }
    public function jobtype()
    {
        return $this->hasMany('App\Models\Postjobtype','jobtype_id');
    }
    
}
