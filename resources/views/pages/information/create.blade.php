@extends('layouts.app')

@section('content')
    <h1 class="mgn-10">This is the add content</h1> 
    <hr class="mgn-btm-10">
    {!! Form::open(['action'=>'infoController@store', 'method'=>'POST', 'autocomplete'=>'off']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    {{ Form::label('', 'First Name: ', ['class'=>'bold']) }}
                    {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'First Name', 'required']) }}
                </div> 
                <div class="col-sm-3">
                    {{ Form::label('', 'Last Name: ', ['class'=>'bold']) }}
                    {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) }}
                </div>               
            </div> 
            <div class="row">
                <div class="col-sm-3">
                    {{ Form::label('', 'Birthday: ', ['class'=>'bold']) }}
                    {{ Form::date('bday', \Carbon\Carbon::now(), ['class'=>'form-control']) }}
                </div> 
                <div class="col-sm-3">
                    {{ Form::label('', 'Gender', ['class'=>'bold']) }}
                    {{ Form::select('gender', ['male'=>'Male', 'female'=>'Female'],'', ['class'=>'form-control'] ) }}
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('', 'Course: ', ['class'=>'bold']) }}
                    {{ Form::select('course', [
                        'bsit'=>'Bachelor of Science in Information Technology',
                        'bscs'=>'Bachelor of Science in Computer Science'
                        ], '', ['class'=>'form-control']) }}
                </div>               
            </div>  
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('', 'Email: ', ['class'=>'bold']) }}
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) }}
                </div>               
            </div>  
            <div class="row">
                <div class="col-sm-6">
                   {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>               
            </div>                    
        </div>
      
    {!! Form::close() !!}
@endsection