<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    
     public function dashboard_new(Request $request)
    {
return $request->all();
    }
    public function dashboard()
    {
        try {
    
          
       
        $now = Carbon::now();
    
        return view('admin', ['now' => Carbon::now()->toDateString()]);
       
      
   
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
      }
}
