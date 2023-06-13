@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('students') }}</div>
                <div class="card-body">
                    <a href="{{url('create')}}" class="btn btn-sm btn-primary" style="float:right;">Add New</a>
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
                                    <a href="{{url('edit/'.$row->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection