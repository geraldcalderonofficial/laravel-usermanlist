@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2 class="float-start">User Management</h2>
                  <span class="pull-right">
                    <a href="/listings/create" class="btn btn-dark btn-xs float-end">Add User</a>
                  </span>
                </div>

                <div class="card-body">

                    @if(count($listings))
                      <table class="table hover">
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->id}}</td>
                            <td>{{$listing->name}}</td>
                            <td>{{$listing->address}}</td>
                            <td><a class="float-end btn btn-default border border-secondary" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                            <td>
                              {!!Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger float-end'])}}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
