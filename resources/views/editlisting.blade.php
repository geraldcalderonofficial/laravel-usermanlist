@extends('layouts.app')

@section('content')
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><h3 class="float-start">Edit User</h3><a href="/dashboard" class="float-end btn btn-dark btn-sm">Go Back</a></div>

                  <div class="card-body">
                    {!!Form::open(['action' => ['App\Http\Controllers\ListingsController@update', $listing->id],'method' => 'POST'])!!}
                      {{Form::bsText('name',$listing->name,['placeholder' => ''])}}
                      {{Form::bsText('email',$listing->email,['placeholder' => ''])}}
                      {{Form::bsText('phone',$listing->phone,['placeholder' => ''])}}
                      {{Form::bsText('address',$listing->address,['placeholder' => ''])}}
                      {{Form::hidden('_method', 'PUT')}}
                      {{Form::bsSubmit('submit', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                  </div>

              </div>
          </div>
      </div>
@endsection
