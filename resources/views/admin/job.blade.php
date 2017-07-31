@extends('admin.layout')

@section('title')
HomePage
@endsection

@section('content')

<div class="row">
 @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
    @endif

    <div class="col-md-8 col-md-offset-1">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
        <h3>Enter The Job Description Appropriately </h3>

        {!! Form::open(['route' => 'store.jd', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('Role', 'Role') }}
            {{ Form::text('role', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('sector', 'Sector') }}
            {{ Form::text('sector', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('deadline', 'Deadline') }}
            {{ Form::text('deadline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('Company', 'Company') }}
            {{ Form::textarea('company', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Responsibility', 'Responsibility') }}
            {{ Form::textarea('resp', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Qualification/Experience', 'Qualification/Experience') }}
            {{ Form::textarea('qual', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Skill', 'Skill') }}
            {{ Form::textarea('skill', null, array('class' => 'form-control')) }}
        </div>
         

        {{ Form::submit('Submit', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>

@endsection