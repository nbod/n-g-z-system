<?php

namespace App\Http\Controllers;

use App\Models\homeSec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class HomeSecController extends Controller
{
    
   
    public function edit ($id) 
       {
      $home = homeSec::findOrFail($id);
      return view('Admin.homeEdit', compact('home'),);
       }

    public function update (Request $request,$id)
      {     
      $request->validate([
                 'name'        => 'required',
                 'Description' =>'required',
                 'file'        =>'required', ]);
      $home = homeSec::find($id);
      $home -> name= $request ->input ('name');
      $home ->Description =   $request->input('Description');
      If($request ->hasFile('file'))
      {
           $file =$request-> file('file');
           $extension =$file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file -> move('assets/img/profile/',$filename);
           $home -> file = $filename; 
      }
          $home -> update();
          Session::flash('success','Home   succesfully  Updated');
          return back () ;
      }  
}
