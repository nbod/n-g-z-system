@extends('Admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-md-12 mb-lg-0 mb-4">       
          <div class="card">
            <div class="card-header">
              <li class="nav-item d-flex align-items-center">
                <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="#">Service  Section</a>
              </li>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('store-service') }}">
                @csrf
                  

                   <div class="form-validation">
                      <form class="form-valide" action="#" method="post">
                            <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-username"> Service Name
                                    </label>
                                    <div class="col-lg-10">
                                        
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                    
                                  </div>
                                </div>                                
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-username">Description                                      
                                        
                                    </label>
                                    <div class="col-lg-10">
                                       
                                      <textarea class="form-control" rows="3" id="description"  name="description"  placeholder="Enter"></textarea>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-xl-6">
                               
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Create Service</button>
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
    <div class="col-lg-6">
        <div class="card">
          <div class="card-header pb-0 px-3">
         
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">                                                   
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              @foreach($services as $service)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                 

               
                  <h6 class="mb-0 text-sm">Name of Service</h6></span> {{$service -> name }}</span>  
                  <h6 class="mb-0 text-sm">Description of  Service</h6></span> {{$service -> description }}</span>
                  
                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{route('delete-service', ['id' => $service->id]) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" href="{{route('edit-services', ['id' => $service->id]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>

           @endforeach
            </ul>
            <span>  {{$service  -> links}}  </span>
          </div>
        </div>
      </div>
    
    </div>
  </div>
@endsection 


