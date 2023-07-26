<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_stream;
use App\Models\Firm_detail;
use App\Models\Job_category;
use App\Models\Graduation;
use App\Models\Job_type;
use App\Models\Stream;
use App\Models\State;
use App\Models\District;
use App\Models\Job_posting;
use App\Models\Postjobtype;
use App\Models\User_profile;
use App\Models\Apply_now;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Image;
class FrontendController extends Controller
{
    public function index()
    {   try
        {
            $state=State::get();
            $jobpost=Job_posting::with('data','data1','data2','data3')->orderBy('id', 'desc')->paginate(2);
            $category=Job_category::limit(8)->get();
        return view('frontend.index',['category'=>$category,'post'=>$jobpost,'state'=>$state]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function findjobs()
    {   try
        {
            $count=Job_posting::count();
            $jobpost=Job_posting::with('data','data1','data2')->get();
            $jobtype=Job_type::get();
            $state=State::get();

        return view('frontend.findjobs',['type'=> $jobtype,'state'=> $state,'post'=> $jobpost,'count'=> $count]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    // filter jobs
    public function filterjobs(Request $request)
{
    //  return $request->all();
    try
    {
        $count=Job_posting::count();

           
            $jobtype=Job_type::get();
            $state=State::get();

        
        $mytime = Carbon::now();
        $date=$mytime->toDateString();
     
     

       $filter=$request->tittle;
       $type1=$request->type;
       
       $experience1=$request->experience1;
       $experience2=$request->experience2;
       $experience3=$request->experience3;
       $experience4=$request->experience4;
       $experience5=$request->experience5;
        $state1=$request->state;
        $minimum=$request->minimum;
        $maximum=$request->maximum;
        $day1=$request->day1;
        $day2=$request->day2;
        $day3=$request->day3;
        $day4=$request->day4;
        $day5=$request->day5;
        $day6=$request->day6;
        $salary1=$request->salary1;
        $salary2=$request->salary2;
        $salary3=$request->salary3;
        $salary4=$request->salary4;
        $query=Job_posting::with('data1','data2');

       if($filter)
       {
        $query=$query->where('job_tittle','LIKE','%'.$filter.'%');
       }
       if($type1)
       {
        $query=$query->join('postjob_type','postjob_type.jobpost_id','=','job_postings.id')->whereIn('postjob_type.jobtype_id',$type1);

       }
    
       if($experience1)
       {
        $query=$query->where('experience','LIKE','%'.$experience1.'%');
        
       }
       if($experience2)
       {
        $query=$query->where('experience','LIKE','%'.$experience1.'%');
       }
       if($experience3)
       {
        $query=$query->where('experience','LIKE','%'.$experience1.'%');
       }
       if($experience4)
       {
        $query=$query->where('experience','LIKE','%'.$experience1.'%');
       }
       if($experience5)
       {
        $query=$query->where('experience','LIKE','%'.$experience1.'%');
       }
       
       if($state1>0)
       {
        
        $query=$query->where('state_id',$state1);
       }
    
    
       if($salary1)
       {
        $query=$query->where('min_salary','>=',$salary1)->orwhere('max_salary','>=',$salary1);
       }
       if($salary2)
       {
        $query=$query->where('min_salary','>=',$salary2)->orwhere('max_salary','>=',$salary2);
       }
       if($salary3)
       {
        $query=$query->where('min_salary','>=',$salary3)->orwhere('max_salary','>=',$salary3);
       }
       if($salary4)
       {
        $query=$query->where('min_salary','>=',$salary4)->orwhere('max_salary','>=',$salary4);
       }
    
       if($day2)
       {
        $query=$query->where('created_at',Carbon::now()->toDateString());
       }
       if($day3)
       {
    $day = Carbon::now()->subDay(2)->toDateString();
    $query=$query->whereBetween('created_at',[$day,Carbon::now()->toDateString()]);

       }
       if($day4)
       {
    $day = Carbon::now()->subDay(3)->toDateString();
    $query=$query->whereBetween('created_at',[$day,Carbon::now()->toDateString()]);

       }
       if($day5)
       {
    $day = Carbon::now()->subDay(5)->toDateString();

    $query=$query->whereBetween('created_at',[$day,Carbon::now()->toDateString()]);

       }
       if($day6)
       {
    $day= Carbon::now()->subDay(10)->toDateString();
    $query=$query->whereBetween('created_at',[$day,Carbon::now()->toDateString()]);

       }
       $query=$query->get();
       $count=$query->count();
       $jobpost=$query;

    return view('frontend.findjobs',['type'=>$jobtype,'state'=>$state,'post'=>$jobpost,'count'=>$count]);

    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 

}
public function indexfilter(Request $request)
{   try
    {
        $count=Job_posting::count();
            $jobtype=Job_type::get();
            $state=State::get();
            $filter=$request->tittle;
            $state1=$request->state;
             $query=Job_posting::with('data1','data2');
       if($filter)
       {
        $query=$query->where('job_tittle','LIKE','%'.$filter.'%');
       }
       if($state1>0)
       {
        $query=$query->where('state_id',$state1);
       }
       $query=$query->get();
       $count=$query->count();
       $jobpost=$query;
       return view('frontend.findjobs',['type'=>$jobtype,'state'=>$state,'post'=>$jobpost,'count'=>$count]);
 
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
    

    public function jobdetails($id)
    {   try
        {
            $data=Job_posting::with('data','data1','data2','data3')->find($id);
            $type=Postjobtype::with('jobtype')->where('jobpost_id',$id)->get();
            // $jobpost=Job_posting::with('data','data1','data2','data3')->get();
        return view('frontend.jobdetails',['detail'=> $data,'type'=>$type]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function register()
    {   try
        {
    
        return view('frontend.register');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function login()
    {   try
        {
    
        return view('frontend.login');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function cv_view($id)
    {   try
        {
            
            $cv=User_profile::find(1);
           
        return view('frontend/cv',['cv'=>$cv]);

        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
   
   
    public function details()
    {   try
        {
            $data=User_profile::where('user_id',Auth::user()->id)->count();
             if($data==0)
            {
        return view('frontend.personal-details');
            }
            else
            { 
                $data=User_profile::where('user_id',Auth::user()->id)->first();
                return view('frontend.edit_personal_details',['editdata'=>$data]);   
            }
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function postjob()
    {   try
        {
    
        return view('frontend.postjob-first');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function postajob()
    {   try
        {
            $user=User::where('id',Auth::user()->id)->first();
            $jobtype=Job_type::get();
            $data=Job_category::get();
            $graduation=Graduation::get();
            $state=State::get();
            $firmName=Firm_detail::where('user_id',Auth::user()->id)->first();
            $profilepic=User_profile::where('user_id',Auth::user()->id)->first();
        return view('frontend.postjob',['job'=>$data,'type'=> $jobtype,'degree'=> $graduation,'state'=> $state,'user'=>$user,'firmName'=>$firmName,'profilepic'=>$profilepic]);
       
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function jobs()
    {   try
        {
            $jobcategory=Job_posting::where('user_id',Auth::user()->id)->with('data1','data2','data3')->get();

            $jobpost=Job_posting::where('user_id',Auth::user()->id)->with('data1','data2','data3')->get();
            // $state=State::get();
            // $category=Job_category::get();
        return view('frontend.jobs',['jobpost'=>$jobpost,'jobcategory'=>$jobcategory]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }

// paused and activate
public function paused($id)
{   try
    {
        
        $status=Job_posting::find($id);
        $status->status=1;
       $status->save();
            
                
       return back();
    }
        
  
    catch (Exception  $e)
    {
        // Do something with your exception
        return $e->getMassage();
    }
}

public function active($id)
{   try
    {
        
        $status=Job_posting::find($id);
        $status->status=0;
        $status->save();
            
                
                return back();
    }
        
  
    catch (Exception  $e)
    {
        // Do something with your exception
        return $e->getMassage();
    }
}

public function job_search(Request $request)
{
    try
    {
        $jobcategory=Job_posting::where('user_id',Auth::user()->id)->with('data1','data2','data3')->get();
        // return $request->all();
        $jobpost=Job_posting::where('user_id',Auth::user()->id)->where('job_post_id',$request->category)->with('data1','data2','data3')->get();
    
    return view('frontend.jobs',['jobpost'=>$jobpost,'jobcategory'=>$jobcategory]);

    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 

}

public function deletepage(Request $request)
{   try{
    $data=Job_posting::find($request->id);
    $data->delete();
    return back();
    }
        
  
    catch (Exception  $e)
    {
        // Do something with your exception
        return $e->getMassage();
    }
}


    public function candidates()
    {   try
        {

            $get_id=Apply_now::with('profile','job')->get();
            $tittle=Job_posting::where('user_id',Auth::user()->id)->get();
        return view('frontend.candidates',['candidate'=>$get_id,'tittle'=>$tittle]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function search_tittle(Request $request)
{
    try
    {
        // return Auth::user()->id;
        // return $request->all();
        $tittle=Job_posting::where('user_id',Auth::user()->id)->get();
        // return $request->all();
        $get_id=Apply_now::with('profile','job')->where('job_post_id',$request->tittle)->get();
    
        return view('frontend.candidates',['candidate'=>$get_id,'tittle'=>$tittle]);

    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 

}
    public function company()
    {   try
        {
            if(Auth::user())
            {
            $data=Firm_detail::where('user_id',Auth::user()->id)->count();
        
            if($data==0)
                {
                    $data=Business_stream::get();
                    
                    return view('frontend.company',['bsnss'=>$data]);
                }
            else
                { 
                    return redirect('frontend.postjob');   
                }
            }
   
    else{
        return redirect('login');
    }
}
        catch (Exception  $e)
        {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function apply()
    {   try
        {
    
        return view('frontend.apply-now');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function get_streampage(Request $request)
    {
        try
        {
        $id=$request->id;
         $student=Stream::where('degree_id',$id)->get(['id','name as name']);
         return response()->json($student);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function get_districtpage(Request $request)
    {
        try
        {
        $id=$request->id;
         $student=District::where('state_id',$id)->get(['id','name as name']);
         return response()->json($student);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    // personal details submission
    public function submitsave(Request $request)
    {
        try
        {
           
            $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $image_path = 'uploads/' . $image_name;
        Image::make($request->file('image'))->resize(30, 30)->save(public_path($image_path));
      
        $personal=new User_profile;
        $personal->user_id= Auth::user()->id;
        $personal->first_name=$request->first_name;
        $personal->last_name=$request->last_name;
        $personal->date_of_birth=$request->date_of_birth;
        $personal->contact_number=$request->contact_number;
        $personal->gender=$request->inlineRadioOptions;
        $personal->image=$image_name;
        $personal->job_category_id=0;
        $personal->job_post_id=0;
        $personal->intrested=0;

        $personal->upload_cv='';
        $personal->skill='';
        $personal->higher_qualification='';
       
        $personal->experience='';
        $personal->state_id=0;
        $personal->district_id=0;

        $personal->save();
        
        return redirect('frontend.index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }

    public function editsave(Request $request)
    {
        try{
            // return Auth::user()->id;
            // return $request->all();
        $personal=User_profile::where('user_id',Auth::user()->id)->first();
        if($request->file('image')){
            $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = 'uploads/' . $image_name;
            Image::make($request->file('image'))->resize(30, 30)->save(public_path($image_path));
            }
            else{$image_name=$personal->image;}
            $personal=User_profile::where('user_id',Auth::user()->id)->first();
            $personal->first_name=$request->first_name;
            $personal->last_name=$request->last_name;
            $personal->date_of_birth=$request->date_of_birth;
            $personal->contact_number=$request->contact_number;
            $personal->gender=$request->inlineRadioOptions;
            $personal->image=$image_name;
            $personal->job_category_id=0;
            $personal->upload_cv='';
            $personal->skill='';
            $personal->higher_qualification='';
         
            $personal->job_post_id=0;
            $personal->intrested=0;
            $personal->experience='';
            $personal->state_id=0;
            $personal->district_id=0;
    
            $personal->save();
            return redirect('frontend.index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    // apply for job start
    public function applyforjob($id)
{   try
    {
        if(Auth::user())
        {
        $applyjob=Job_posting::find($id);
        $state=State::get();
        $district=District::get();
        $data=User_profile::where('user_id',Auth::user()->id)->count();
      
        if($data==0)
            {
                
                
                return view('frontend.apply-now',['apply'=>$applyjob,'state'=>$state,'district'=>$district]);
            }
        else
            { 
                $getprofile=User_profile::where('user_id',Auth::user()->id)->first();
              
                return view('frontend.edit_apply_now',['profile'=>$getprofile,'apply'=>$applyjob,'state'=>$state,'district'=>$district]);   
            }
            
        }
        else{
            return redirect('login'); 
        }        
       
    }
        
  
    catch (Exception  $e)
    {
        // Do something with your exception
        return $e->getMassage();
    }
}
    // apply for job end
    
    public function applynow_save(Request $request)
    {
        try
        {
            

            $image_name =$request->file('image')->getClientOriginalExtension();
            $image_path = 'uploads/' . $image_name;
            Image::make($request->file('image'))->resize(30, 30)->save(public_path($image_path));

if ($request->hasFile('file')) {
        $file = $request->file('file');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = base_path('Uploads/cv_store');
        $file->move($destinationPath, $file_name);}

    
     
      $get_category_id=Job_posting::where('id',$request->id)->first();
        $personal=new User_profile;
        $personal->user_id=Auth::user()->id;
        $personal->first_name=$request->first_name;
        $personal->last_name=$request->last_name;
        $personal->date_of_birth=$request->date_of_birth;
        $personal->contact_number=$request->contact_number;
        $personal->gender=$request->inlineRadioOptions;
        $personal->image=$image_name;
        $personal->job_post_id=$request->id;
        $personal->upload_cv=$file_name;
        $personal->skill=$request->skill;
        $personal->higher_qualification=$request->flexRadioDefault;
        $personal->apply_date=$request->apply_date;
        $personal->experience=$request->experience;
        $personal->state_id=0;
        $personal->district_id=0;
        $personal->job_category_id= $get_category_id->job_category_id;
      
        $personal->intrested=1;
        $personal->save();
         $apply=new Apply_now;
            $apply->job_post_id=$request->id;;
            $apply->user_id=Auth::user()->id;
            $apply->save();
        return redirect('frontend.index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
     
    public function updateapply(Request $request)
    {
        try
        {
            // return $request->all();
            $get_category_id=Job_posting::where('id',$request->id)->first();
            $personal=User_profile::where('user_id',Auth::user()->id)->first();
            if($request->file('image')){
                $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $image_path = 'uploads/' . $image_name;
                Image::make($request->file('image'))->resize(30, 30)->save(public_path($image_path));
                }
                else{$image_name=$personal->image;}
                
    if ($request->resume) {
        $file = $request->file('resume');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        
        // $destinationPath = base_path('Uploads/cv_store');
        $file->move(public_path('Uploads/cv_store'), $file_name);}


    $personal=User_profile::where('user_id',Auth::user()->id)->first();
        $personal->user_id=Auth::user()->id;
        $personal->first_name=$request->first_name;
        $personal->last_name=$request->last_name;
        $personal->date_of_birth=$request->date_of_birth;
        $personal->contact_number=$request->contact_number;
        $personal->gender=$request->inlineRadioOptions;
        $personal->image=$image_name;
        $personal->job_post_id=$request->id;
        $personal->upload_cv=$file_name;
        $personal->skill=$request->skill;
        $personal->higher_qualification=$request->flexRadioDefault;
        $personal->apply_date=$request->apply_date;
        $personal->experience=$request->experience;
        $personal->state_id=0;
        $personal->district_id=0;
        $personal->job_category_id= $get_category_id->job_category_id;
      
        $personal->intrested=1;
        $personal->save();
        $apply=new Apply_now;
        $apply->job_post_id=$request->id;;
        $apply->user_id=Auth::user()->id;
        $apply->save();
        return redirect('frontend.index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }

    

}
