@extends('layouts.admin')

@section('content')

    {!! Form::open(['action'=>'AdminUsersController@store', 'method'=>'POST','files'=>true]) !!}
    <div class="form-group">

        {!! Form::label('name','User Name') !!}
        {!! Form::text('name','',['class'=>'form-control']) !!}

        {!! Form::label('email') !!}
        {!! Form::text('email','',['class'=>'form-control']) !!}

        {!! Form::label('password') !!}
        {!! Form::text('password','',['class'=>'form-control']) !!}

        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', [1 => 'Admin', 2 => 'Subscriber'], '1',['class'=>'form-control']) !!}

        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active',[0=>'in-active', 1=>'active'], 0, ['class'=>'form-control']) !!}
        {{--{!! Form::label('file', 'Photo') !!}--}}
        {{--{!! Form::file('file') !!}--}}
        <br>


        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @if(count($errors)>0)
        @foreach($errors->all() as $error)

            <div class="alert alert-danger">
                {{$error}}
            </div>

        @endforeach
    @endif

@stop