@extends('layouts.app')

@section('content')
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{$listing->name}} <a href="/listings" class="float-end border border-secondary btn btn-default btn-xs">Go Back</a></div>

                  <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item">Email: {{$listing->email}}</li>
                          <li class="list-group-item">Phone: {{$listing->phone}}</li>
                          <li class="list-group-item">Address: {{$listing->address}}</li>
                        </ul>
                        <hr>
                  </div>

              </div>
          </div>
      </div>
@endsection
