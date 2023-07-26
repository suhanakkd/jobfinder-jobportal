<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_stream;
class BusinessController extends Controller
{
    public function indexpage()
    {   try
        {
        $data=Business_stream::get();
        return view('business_stream/index',['stream'=>$data]);
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
        return view('business_stream/create');
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
        $data=new Business_stream;
        $data->name=$request->name;
        $data->save();
        return redirect('business_stream/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
        $data=Business_stream::find($id);
        return view('business_stream/edit',['stream'=>$data]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=Business_stream::find($request->id);
        $data->name=$request->name;
        $data->save();
        return redirect('business_stream/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=Business_stream::find($request->id);
        $data->delete();
        return redirect('business_stream/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
