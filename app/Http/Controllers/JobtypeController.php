<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_type;
class JobtypeController extends Controller
{
    public function indexpage()
    {   try
        {
        $data=Job_type::get();
        return view('jobtype/index',['type'=>$data]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }

    
    public function createpage()
    { 
        try
        {
        return view('jobtype/create');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function savepage(Request $request)
    {
        try
        {
        $data=new Job_type;
        $data->name=$request->name;
        $data->save();
        return redirect('jobtype/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
        $data=Job_type::find($id);
        return view('jobtype/edit',['type'=>$data]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=Job_type::find($request->id);
        $data->name=$request->name;
        $data->save();
        return redirect('jobtype/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=Job_type::find($request->id);
        $data->delete();
        return redirect('jobtype/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
