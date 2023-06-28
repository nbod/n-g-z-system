<?php

namespace App\Http\Controllers;
use App\Models\about;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class webController extends Controller
{

public function website ()
    {
          $about=DB::table('about')->orderBy('id',)->get();
          $pricings=DB::table('pricings')->orderBy('id',)->get();
          $service=DB::table('services')->orderBy('id',)->get();
          $home=DB::table('home_secs')->orderBy('id',)->get();
          $company=DB::table('company')->orderBy('id',)->get();
          return view ('website',compact('about','pricings','service','home','company',)) ;
    }

}
