@extends('Admin.layout')
@section('content')
<div class="row">
   
    
        <div class="card">
          <div class="card-header pb-0 px-3">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="#">Home  Section</a>
            </li>
            <div class="navbar-search-block">
             
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
                @foreach($home as $home)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                 
                  <h6 class="mb-0 text-sm">Company Name</h6></span> {{$home -> name }}</span>  
                  <img src="assets/img/profile/{{$home-> file}}" class="img-fluid" alt="">
                  <h6 class="mb-0 text-sm">Company Description</h6> </span>{{$home -> Description}}</span>
                  <a class="btn bg-gradient-dark mb-0" href="{{route('edit-home', ['id' => $home->id]) }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Update</a>
                </div>
                <div class="ms-auto text-end">
                  
                  
                </div>
              </li>
           @endforeach
            </ul> 
          </div>
        </div>
      </div>
    
    </div>
  </div>
@endsection