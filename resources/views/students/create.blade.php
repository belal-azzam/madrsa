@extends('layouts.admin')

@section('content')
    <div class="card uper">
        <div class="card-header">
            Add Student
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{!$student ? route('students.store') : route('students.update', [$student->id])}}">
                <div class="form-group">
                    @csrf

                    @if(isset($student))
                    @method('PUT')
                    @endif
                    <label for="first_name">First Name</label>
                    <input value="{{old('first_name',$student->first_name)}}" id="first_name" type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input value="{{old('last_name',$student->last_name)}}" id="last_name" type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input value="{{old('password','')}}" type="password" id="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input value="{{old('password','')}}" type="password" id="confirmPassword" class="form-control" name="confirmPassword">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{old('email',$student->email)}}" type="email" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input value="{{old('birth_date',$student->birth_date)}}" type="date" id="birthdate" class="form-control" name="birth_date">
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input value="1" checked="{{$student->gender == 1 ? 'checked' : ''}}"  type="radio" id="customRadioInline1" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input value="2" checked="{{$student->gender == 2 ? 'checked' : ''}}"  type="radio" id="customRadioInline2" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                </div>

                <button type="submit" class="float-right btn btn-primary">Save Student</button>
            </form>
        </div>
    </div>
    {{--<div class="card uper">--}}
        {{--<div class="card-header">--}}
            {{--Add Share--}}
        {{--</div>--}}
        {{--<div class="card-body">--}}

            {{--<form method="post" action="{{ route('shares.store') }}">--}}
                {{--<div class="form-group">--}}
                    {{--@csrf--}}
                    {{--<label for="name">Share Name:</label>--}}
                    {{--<input type="text" class="form-control" name="share_name"/>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="price">Share Price :</label>--}}
                    {{--<input type="text" class="form-control" name="share_price"/>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="quantity">Share Quantity:</label>--}}
                    {{--<input type="text" class="form-control" name="share_qty"/>--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Add</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}

@stop