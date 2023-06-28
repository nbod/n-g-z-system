<?php

namespace App\Http\Controllers;
use App\Models\about;
use App\Models\pricing;
use App\Models\service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
   
    public function edit ($id) 
    {
      $about = about::findOrFail($id);
      return view('Admin.aboutEdit', compact('about'),);
    }
    
    public function update (Request $request,$id)
    {              
      $request->validate([
        'address'=> 'required',
        'number' =>'digits:10',
        'email' =>'email',
         ]);

      $about = about::find($id);
      $about -> address= $request ->input ('address');
      $about->number =   $request->input('number');
      $about->email =   $request->input('email');
      $about -> update ();
      Session::flash('success','  Contact Us Succesfully  Updated');
      return back ();
    }   
}
