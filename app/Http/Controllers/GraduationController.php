<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graduation;
class GraduationController extends Controller
{
    public function indexpage()
    {   try
        {
        $data=Graduation::get();
        return view('degree/index',['degree'=>$data]);
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
        return view('degree/create');
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
        $data=new Graduation;
        $data->name=$request->name;
        $data->save();
        return redirect('degree/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
        $data=Graduation::find($id);
        return view('degree/edit',['degree'=>$data]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=Graduation::find($request->id);
        $data->name=$request->name;
        $data->save();
        return redirect('degree/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=Graduation::find($request->id);
        $data->delete();
        return redirect('degree/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
