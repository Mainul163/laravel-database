@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('students') }}</div>

                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

    @foreach($ts as $key=>$row)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      
      <td> 
        <a class="btn btn-success">students</a>
         <a class="btn btn-danger">class</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
