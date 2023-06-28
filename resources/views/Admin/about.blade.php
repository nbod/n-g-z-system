@extends('Admin.layout')
@section('content')
<div class="row">
   
    
        <div class="card">
          <div class="card-header pb-0 px-3">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="#">Contact  Section</a>
            </li>
            <div class="navbar-search-block">
             
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
                @foreach($about as $about)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">ID</h6>
                  <h6 class="mb-0 text-sm">Email</h6></span> {{$about -> address }}</span>  
                  <h6 class="mb-0 text-sm">Email</h6></span> {{$about -> email }}</span>
                  <h6 class="mb-0 text-sm">Number</h6> </span>{{$about -> number }}</span>
                </div>
                <div class="ms-auto text-end">
                  <a class="btn bg-gradient-dark mb-0" href="{{route('edit-about', ['id' => $about->id]) }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Update</a>
                  
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