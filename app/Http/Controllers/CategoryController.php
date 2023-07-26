<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_category;
use Image;
class CategoryController extends Controller
{
    public function indexpage()
    {   try
        {
        $data=Job_category::get();
        return view('category/index',['category'=>$data]);
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
        return view('category/create');
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
           
            $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $image_path = 'uploads/' . $image_name;
        Image::make($request->file('image'))->resize(320, 240)->save(public_path($image_path));
      
        $data=new Job_category;
        $data->name=$request->name;
        
        $data->category_image=$image_name;
        $data->save();
        
        return redirect('category/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function editpage($id)
    {   try
        {
        $data=Job_category::find($id);
        return view('category/edit',['category'=>$data]);
        }
        catch (Exception $e) {
            return $e->getMassage();
        }
       
    }
    public function updatepage(Request $request)
    {
        try{
        $data=Job_category::find($request->id);
        if($request->file('image')){
            $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = 'uploads/' . $image_name;
            Image::make($request->file('image'))->resize(320, 240)->save(public_path($image_path));
            }
            else{$image_name=$data->image;}
            $data=Job_category::find($request->id);
        $data->name=$request->name;
        $data->image=$request->image_name;
        $data->save();
        return redirect('category/index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 
        
    }
    public function deletepage(Request $request)
    {   try{
        $data=Job_category::find($request->id);
        $data->delete();
        return redirect('category/index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 
       
    }



}
