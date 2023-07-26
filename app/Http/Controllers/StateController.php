<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
class StateController extends Controller
{
    public function statepage()
    {   try
        {
        $data=State::get();
        return view('state/index',['state'=>$data]);
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
        return view('state/create');
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
        $data=new State;
        $data->name=$request->name;
        $data->save();
        return redirect('state/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
        $data=State::find($id);
        return view('state/edit',['data'=>$data]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=State::find($request->id);
        $data->name=$request->name;
        $data->save();
        return redirect('state/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=State::find($request->id);
        $data->delete();
        return redirect('state/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
