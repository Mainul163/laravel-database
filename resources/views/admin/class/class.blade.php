@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Class') }}</div>
                <div class="card-body">
                    <a href="{{route('class.create')}}" class="btn btn-sm btn-primary" style="float:right;">Add New</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Teacher Roll</th>
                                <th scope="col">Email</th>
                                <th scope="col">Student Id</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($class as $key=>$row)
                            <tr>
                                <th scope="row">{{$row->c_id}}</th>
                                <td>{{$row->teacher_roll}}</td>
                                <td>{{$row->c_email}}</td>
                                <td>{{$row->name}}</td>

                                <td>
                                    <a href="{{route('class.edit',$row->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('class.show',$row->id)}}" class="btn btn-info">view</a>
                                    <form action="{{route('class.destroy',$row->id)}}" method="post">

                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type='submit' class="btn btn-danger">DELETE</button>
                                    </form>

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