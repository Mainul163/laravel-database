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


                            <tr>
                                <th scope="row">{{$class->id}}</th>
                                <td>{{$class->teacher_roll}}</td>
                                <td>{{$class->email}}</td>
                                <td>{{$class->students_id}}</td>


                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection