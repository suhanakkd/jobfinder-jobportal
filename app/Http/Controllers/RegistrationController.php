<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;

class RegistrationController extends Controller
{
    public function savepage(Request $request)
    {
        try
        {
        //  return $request->all();
        $request->validate([
            'email_id' => 'required',
            'password' => 'required|min:6',
            // 'password' => 'required|confirmed|min:6',

        ]);
        // return $request->all();
         DB::transaction(function () use($request) {
            $data=new Registration;
            $data->email_id=$request->email_id;
            $data->password=$request->password;
            $data->save();
            
         });
        return redirect('frontend.login');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
     }
     
       
       
    }

        
    

