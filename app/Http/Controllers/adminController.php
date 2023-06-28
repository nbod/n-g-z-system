<?php

namespace App\Http\Controllers;
use App\Models\about;
use App\Models\pricing;
use App\Models\service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class adminController extends Controller
{
      public  function  service ()
      {
        $services = DB::table('services')->orderBy('id',)->get();
        $services = service::paginate(8);
        return  view('Admin.service',compact('services'));
      }

      public  function price()
      {
        $pricings = DB::table('pricings')->orderBy('id',)->get();
        $pricings = pricing::paginate(8);
        return view ('Admin.price',compact('pricings'));      
      }


      public  function about()
      {
        $about = DB::table('about')->orderBy('id',)->get();
        return view ('Admin.about',compact('about')); 
      }



      public  function   home ()
      {
        $home = DB::table('home_secs')->orderBy('id',)->get();
        
        return  view ('Admin.home',compact('home'));
      }
      
      public  function   company ()
      {
        $company = DB::table('company')->orderBy('id',)->get();
        return  view ('Admin.company',compact('company'));
      }
}
