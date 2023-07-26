<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graduation;
use App\Models\Stream;
class StreamController extends Controller
{
    public function indexpage()
    {   try
        {
            $data=Stream::with('data')->get();
            return view('stream/index',['stream'=>$data]);
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
    
            $data=Graduation::get();
                return view('stream/create',['degree'=>$data]);

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
        $data=new Stream;
        $data->degree_id=$request->degree_id;
        $data->name=$request->name;
        $data->save();
        return redirect('stream/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
            $degree=Graduation::get();
            $stream=Stream::find($id);
            
            return view('stream.edit',['stream'=>$stream,'degree'=>$degree]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=Stream::find($request->id);
        $data->degree_id=$request->degree_id;
        $data->name=$request->name;
        $data->save();
        return redirect('stream/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=Stream::find($request->id);
        $data->delete();
        return redirect('stream/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
