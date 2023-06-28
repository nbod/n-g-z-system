<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\membership;


class MembershipController extends Controller
{


    public  function membership ()
      {
        return view ('membership');

      }



      public function storemembership(Request $request)
      {

            $request->validate([
                    'name'=> 'required',
                    'email' =>'required',
                    'phone'=>'required',
             ]);


             membership::create([
              'name' => $request->name,
              'email' => $request->email,
              'phone' => $request->phone,
              ]);
              return back () ;
      }



      public  function  adminMembership()
      {
        $membership=DB::table('memberships')->orderBy('id',)->get();
        return view('Admin.membership',compact('membership'));

      }


}
