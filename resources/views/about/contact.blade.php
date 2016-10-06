@extends('layout')

@section('uniqueMetadata')
    <meta name="description" content="Misha Milovidov Resume Site Contact Page">
    <meta name="title" content="Misha Milovidov">
@stop

@section('title')
    Misha Milovidov | Contact Me
@stop

@section('content')

    <div class="jumbotron">
        <h2 class="">Contact Me</h2>
        <div class="row">
        @foreach($errors->all() as $error)
        <div class="col-md-3">
            <div class="alert alert-danger">
                <p id="validation">{{ $error }}</p>
            </div>
        </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('Name') !!}
                                {!! Form::text('name', null, 
                                    array('required', 
                                        'class'=>'form-control', 
                                        'placeholder'=>'')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Email') !!}
                                {!! Form::text('email', null, 
                                    array('required', 
                                        'class'=>'form-control', 
                                        'placeholder'=>'email@example.com')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Message Subject') !!}
                                {!! Form::text('subject', null, 
                                    array('required', 
                                        'class'=>'form-control', 
                                        'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('Message') !!}
                                {!! Form::textarea('message', null, 
                                    array('required', 
                                        'class'=>'form-control',
                                        'rows'=>'6', 
                                        'placeholder'=>'')) !!}
                            </div>
                            <div class="pull-right">
                                {!! Form::submit('Send Message', array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop