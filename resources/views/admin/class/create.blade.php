@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class') }}

                    <a href="{{route('class.store')}}" class="btn btn-sm btn-primary" style="float:right;">All
                        classes</a>
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                    @endif
                    <form action="{{route('class.store')}}" method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student id</label>
                            <select name="students_id">
                                @foreach($ts as $row)
                                <option value="{{$row->id}}">
                                    {{$row->name}}
                                </option>

                                @endforeach
                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name='c_email' class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" class="@error('c_email') is-invalid @enderror"
                                value="{{old('c_email')}}">
                            @error('c_email')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Teacher Roll</label>
                            <input type="number" name="teacher_roll" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" lass="@error('teacher_roll') is-invalid @enderror"
                                value="{{old('teacher_roll')}}">
                            @error('teacher_roll')
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