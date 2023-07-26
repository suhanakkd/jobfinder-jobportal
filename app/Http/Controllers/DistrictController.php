<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\District;
class DistrictController extends Controller
{
    public function indexpage()
    {   try
        {
            $data=District::with('data')->get();
            return view('district/index',['district'=>$data]);
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
    
            $data=State::get();
                return view('district/create',['state'=>$data]);

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
        $data=new District;
        $data->state_id=$request->state_id;
        $data->name=$request->name;
        $data->save();
        return redirect('district/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
            $state=State::get();
            $district=District::find($id);
            
            return view('district.edit',['district'=>$district,'state'=>$state]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=District::find($request->id);
        $data->state_id=$request->state_id;
        $data->name=$request->name;
        $data->save();
        return redirect('district/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=District::find($request->id);
        $data->delete();
        return redirect('district/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
