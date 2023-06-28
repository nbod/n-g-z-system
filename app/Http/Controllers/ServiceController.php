<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
         $request->validate([
        'name'=> 'required',
        'description'=>'required',
         ]);
              service::create ([
            'name' => $request->name,
            'description' => $request->description,           
            ]);
          Session::flash('success','Service  Created succesfully  ');
          return back () ;
    }

    public function edit ($id) 
    {
      $services = service::findOrFail($id);
      return view('Admin.serviceEdit', compact('services'),);
    }
    public function update (Request $request,$id)
    {
     $request->validate([
        'name'=> 'required',
        'description'=>'required',
         ]);
      $service = service::find($id);
      $service -> name= $request ->input ('name');
      $service->description =   $request->input('description');
      $service -> update ();
      Session::flash('success','  Service Succesfully  Updated');
      return back ();
    }
    public function delete($id) 
    {
      $service= service::findOrFail($id);
      $service->delete();
      Session::flash('success',' Service Deleted  Succefully ');
      return back();
    }  
}
