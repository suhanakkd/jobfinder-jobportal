<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firm_detail;
use Image;
use Auth;
class FirmController extends Controller
{
    public function submitsave(Request $request)
    {
    //   return $request->all();
        $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $image_path = 'uploads/' . $image_name;
        Image::make($request->file('image'))->resize(85, 85)->save(public_path($image_path));
        $data=new Firm_detail;
        $data->name=$request->name;
        $data->business_stream_id =$request->business_stream_id;
        $data->image=$image_name;
        $data->establishment_date=$request->establishment_date;
        $data->website_url=$request->website_url;

        $data->user_id= Auth::user()->id;
        $data->save();
        return redirect('frontend.postjob');
    }

}
