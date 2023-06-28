
@extends('Admin.layout')
@section('content')
        <div class="row">
            <div class="row">
              <div class="row">
                <div class="col-md-12 mb-lg-0 mb-4">       
                  <div class="card">
                    <div class="card-header">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="#">AboutUs  Section</a>
                          </li>
                    </div>
                    <div class="card-body">
                         <form method="POST" action="{{route('update-about', ['id' => $about->id])}}">
                            @csrf
                            @method('PUT')

                           <div class="form-validation">
                              <form class="form-valide" action="#" method="post">
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-username">Email
                                                
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="email" name="email" value="{{$about-> email}}">
                                                <span style="color:red"> @error('email') {{$message}})@enderror </span> 
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-username">Address                                    
                                               
                                            </label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" rows="3" id="address"  name="address"  value="{{$about ->  address}}"></textarea>
                                                <span style="color:red"> @error('address') {{$message}})@enderror </span> 
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-currency">Number
                                               
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="number" name="number" value="{{$about -> number}}">
                                                <span style="color:red"> @error('number') {{$message}})@enderror </span>                       

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>                       
                </div>
              </div>
            </div>                           
            </div>
          </div>
      </div>
      @endsection
  