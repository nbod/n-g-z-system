@extends('Admin.layout')
@section('content')
<div class="row">
   
    <div class="col-lg-10">
        <div class="card">
          <div class="card-header pb-0 px-3">
         
            
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  
                  @foreach($company as $company)
               
                  <img src="assets/img/team/{{$company-> file}}" class="img-fluid" alt="">
                  <h6 class="mb-0 text-sm">OUR HISTORY </h6></span> {{$company -> history}}   </span>
                  <a class="btn bg-gradient-dark mb-0" href="{{route('company-edit' ,['id' => $company->id] )}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Update</a>
                </div>
                @endforeach
              </li>

         
            </ul>
          </div>
        </div>
      </div>
    
    </div>
  </div>
@endsection 