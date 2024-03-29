@extends('layout')

@section('uniqueMetadata')
    <meta name="description" content="Misha Milovidov About Page">
    <meta name="title" content="Misha Milovidov">
@stop

@section('title')
    Misha Milovidov | About
@stop

@section('content')

    <div class="jumbotron about-container">
        <h2>About</h2>
        <div class="row">
            <div class="col-md-4" id="about-profile">
                <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/misha-summer.png" class="img-circle center-block profile-picture" alt="Misha and Summer Picture" width="70%">
            </div>
            <div class="col-md-8">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingAbout">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseAbout" aria-expanded="true" aria-controls="collapseAbout">
                            <h4 class="panel-title">
                                Summary
                            </h4>
                        </a>
                        </div>
                        <div id="collapseAbout" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingAbout">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 home-text">
                                    <p>Summer and have been married for a few years and we are excited to meet our baby girl very soon! </p>
                                    <p>Summer and her family love the Seahawks and me and my family love the Broncos (it makes for quite the rivalry, especially after the Seahawks dismantled the Broncos in the Super Bowl in 2013). We empitomize the American Melting Pot; I'm half-Russian and she is half-Vietnamese.</p>
                                    <p>We love meeting people and are excited for the opportunities ahead of us!</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingAbout-One">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseAbout-One" aria-expanded="false" aria-controls="collapseAbout-One">
                            <h4 class="panel-title">
                                Hobbies
                            </h4>
                        </a>
                        </div>
                        <div id="collapseAbout-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAbout-One">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/football.png" class="center-block" alt="Football Picture" width="30%">
                                        <h5 class="text-center">Football</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/basketball.png" class="center-block" alt="Basketball Picture" width="30%">
                                        <h5 class="text-center">Basketball</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/soccer.png" class="center-block" alt="Soccer Picture" width="30%">
                                        <h5 class="text-center">Soccer</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/skiing.png" class="center-block" alt="Skiing Picture" width="30%">
                                        <h5 class="text-center">Skiing</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/yoga.png" class="center-block" alt="Yoga Picture" width="30%">
                                        <h5 class="text-center">Yoga</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/outdoors.png" class="center-block" alt="Outdoors Picture" width="30%">
                                        <h5 class="text-center">Being Outdoors</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingAbout-Two">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseAbout-Two" aria-expanded="false" aria-controls="collapseAbout-Two">
                            <h4 class="panel-title">
                                Achievements
                            </h4>
                        </a>
                        </div>
                        <div id="collapseAbout-Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAbout-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6" id="ikea-achievement">
                                    <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/ikea-logo.png" class="center-block" alt="IKEA Logo" width="50%">
                                    <h5 class="text-center">Advanced IKEA Product Assembler</h5>
                                </div>
                                <div class="col-md-6">
                                    <img src="https://s3-us-west-2.amazonaws.com/mmilovidov/img/tvmount.png" class="center-block" alt="TV Mount Picture" width="50%">
                                    <h5 class="text-center">Experienced TV Mounter</h5>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

@stop
