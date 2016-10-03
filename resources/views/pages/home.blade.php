@extends('layout')

@section('uniqueMetadata')
    <meta name="description" content="Misha Milovidov Resume Site">
    <meta name="title" content="Misha Milovidov">
@stop

@section('title')
    Misha Milovidov
@stop

@section('content')

    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/headshot.png" class="img-circle center-block profile-picture" alt="Misha Milovidov Profile Picture" width="80%">
            </div>
            <div class="col-md-8 home-text">
                <p>I am a pragmatic person that loves expanding my knowledge, contributing to productive projects, and creating effective solutions.</p> 
                <p>I enjoy learning about and participating in business; I am especially interested in improving the effeciency of business through the implementation of robust and scalable systems.</p>
                <p>I am excited to learn from those with experience in the Information Systems industry and I look forward to adding value myself. </p>
                <div class="row">
                    <div class="col-xs-12 contact-info">
                        <p class="text-center">CONTACT ME:</p>
                        <p class="text-center"><a href="mailto:m.milovidov@icloud.com">m.milovidov@icloud.com</a></p>
                        <p class="text-center"><a href="tel:719-671-8207">719.671.8207</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop