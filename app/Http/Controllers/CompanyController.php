<?php

namespace App\Http\Controllers;
use App\Models\company;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
      
    public function update(Request $request,$id)
    {  
        $request->validate([
            'file'        => 'required',
            'history' =>'required',
             ]);
        $company = company::find($id);
        $company->history= $request->input('history');
        If($request ->hasFile('file'))
        {
             $file =$request-> file('file');
             $extension =$file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file -> move('assets/img/team/',$filename);
             $company -> file = $filename; 
        }
            $company -> update();
            Session::flash('success','AboutUs   succesfully  Updated');
            return back () ;
        }
        public function edit ($id) 
       {
        $company  = company::findOrFail($id);
      return view('Admin.companyUpdate',compact('company'));
       }
     
}
