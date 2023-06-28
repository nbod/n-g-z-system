<?php

namespace App\Http\Controllers;

use App\Models\pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PricingController extends Controller
{
  
    public function storeprice(Request $request)
    {
          $request->validate([
                'name'=> 'required',
                'price' =>'required',
                  'description'=>'required',
           ]);
          pricing::create ([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            ]);
          Session::flash('success','Price Succesfully Created');
          return back () ;
    }
    public function destroy($id) 
    {
  
      $price= pricing::findOrFail($id);
      $price->delete();
      Session::flash('success',' Price Deleted  Succefully ');
      return back();
    }

    public function edit ($id) 
    {
      $pricing = pricing::findOrFail($id);
      return view('Admin.priceEdit', compact('pricing'),);
    }

    public function update (Request $request,$id)
    {            
    
      $price = pricing::find($id);
      $price -> name= $request ->input ('name');
      $price->price =   $request->input('price');
      $price->description =   $request->input('description');
      $price -> update ();
      Session::flash('success','  Price Succesfully  Updated');
      return back ();
    }
}
