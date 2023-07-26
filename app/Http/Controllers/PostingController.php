<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_posting;
use App\Models\Postjobtype;
use App\Models\Firm_detail;
use DB;
use Auth;

class PostingController extends Controller
{
    public function savepage(Request $request)
    {
        // return $request->all();
        try
        {
           
             DB::transaction(function () use($request) {
            $company=Firm_detail::where('user_id',Auth::user()->id)->first();

        $data=new Job_posting;
        $data->job_category_id=$request->job_category_id;
        $data->job_tittle=$request->tittle;
        $data->vacancy=$request->vacancy;
        $data->job_description=$request->job_description;
        $data->firm_description=$request->company_description;
        $data->posting_date=$request->postdate;
        $data->last_date=$request->lastdate;
        $data->min_salary=$request->minimum;
        $data->max_salary=$request->maximum;
        $data->skill=$request->description1;
        $data->experience_details=$request->description2;
        $data->email_id=$request->email;
        $data->mob_num=$request->mobile;
        $data->graduation_id=$request->degree_id;
        $data->stream_id=$request->stream;
        $data->state_id=$request->state_id;
        $data->district_id=$request->district;
        $data->experience=$request->experience1.','.$request->experience2.','.$request->experience3.','.$request->experience4.','.$request->experience5;
        $data->higher_qualification=$request->flexRadioDefault;
        $data->user_id=Auth::user()->id;
        $data->company_id=$company->id;
        $data->status=1;
        $data->save();
        foreach($request->job_type_id as $key=>$ty)
        {
            $jobtype=new Postjobtype;
            $jobtype->jobpost_id=$data->id;
            $jobtype->jobtype_id=$request->job_type_id[$key];
            $jobtype->save();
        }
    });
        return redirect('frontend.postjob');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
}
