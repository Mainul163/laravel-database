@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('students') }}

                    <a href="{{url('students')}}" class="btn btn-sm btn-primary" style="float:right;">All students</a>
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                    @endif
                    <form action="{{url('store')}}" method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" class="@error('name') is-invalid @enderror"
                                value="{{old('name')}}">

                            @error('name')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" class="@error('email') is-invalid @enderror"
                                value="{{old('email')}}">
                            @error('email')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">roll</label>
                            <input type="number" name="roll" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" lass="@error('roll') is-invalid @enderror"
                                value="{{old('roll')}}">
                            @error('roll')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection