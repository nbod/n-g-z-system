@extends('Admin.layout')
@section('content')
<div class="row">
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
                @foreach($membership  as $membership )
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">


                    <h6 class="mb-0 text-sm">Name</h6></span> {{$membership -> name}}</span>
                    <h6 class="mb-0 text-sm">Description</h6></span> {{$membership  -> email }}</span>
                    <h6 class="mb-0 text-sm">Price</h6> </span>{{$membership  ->  phone }}</span>

                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href=""><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" href=""><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>

               </ul>

            @endforeach

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
