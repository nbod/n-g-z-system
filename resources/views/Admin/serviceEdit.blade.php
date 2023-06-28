
@extends('Admin.layout')
@section('content')
        <div class="row">
            <div class="row">
              <div class="row">
                <div class="col-md-12 mb-lg-0 mb-4">       
                  <div class="card">
                    <div class="card-header">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="#">Service  Update</a>
                          </li>
                    </div>
                    <div class="card-body">
                         <form method="POST" action="{{route('update-services', ['id' => $services->id])}}">
                            @csrf
                            @method('PUT')

                           <div class="form-validation">
                              <form class="form-valide" action="#" method="post">
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-username">Name
                                              
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="name" name="name" value="{{$services->name}}">
                                           
                                                <span style="color:red"> @error('name') {{$message}})@enderror </span>  </div>
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-username">Description                                      
                                              
                                            </label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" rows="3" id="description"  name="description"  value=""></textarea>
                                                <span style="color:red"> @error('description') {{$message}})@enderror </span>  </div>
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="col-xl-6">
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update </button>
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
  