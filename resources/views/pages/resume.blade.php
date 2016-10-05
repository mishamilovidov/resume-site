@extends('layout')

@section('uniqueMetadata')
    <meta name="description" content="Misha Milovidov Resume Details">
    <meta name="title" content="Misha Milovidov">
@stop

@section('title')
    Misha Milovidov | Resume
@stop

@section('content')

    <div class="jumbotron resume-container">
        <h2 class="">Resume</h2>
        <h3>Education</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach ($schools as $school)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne-One">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#{{ $school->schoolID }}-{{ $school->schoolCity }}" aria-expanded="false" aria-controls="{{ $school->schoolID }}-{{ $school->schoolCity }}">
                            <h4 class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        {{ $school->schoolName }}
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="pull-right">{{ date('M Y', strtotime($school->schoolGraduationDate)) }}</span>
                                    </div>
                                </div>
                            </h4>
                        </a>
                    </div>
                    <div id="{{ $school->schoolID }}-{{ $school->schoolCity }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ $school->schoolLogo }}" class="center-block" alt="{{ $school->schoolName }} Logo" width="{{ $school->schoolLogoWidth }}%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="{{ $school->schoolGmapsLink }}" target="_blank"> {{ $school->schoolCity }}, {{ $school->schoolState }}
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>{{ $school->schoolMajor }}</h4>
                                        <h5>GPA: {{ $school->schoolGPA }}</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h4 id="clubs-label">Clubs:</h4>
                                            </div>
                                            @foreach ($clubs as $club)
                                                 @if ($school->schoolID == $club->schoolID)
                                                    <div class="col-md-3 clubs">
                                                        <img src="{{ $club->clubLogo }}" class="center-block" alt="BYU Logo" width="{{ $club->clubLogoWidth }}%">
                                                        <h5 class="text-center">{{ $club->clubName }}</h5>
                                                        <span><a href="{{ $club->clubWebsiteURL }}" target="_blank"><i class="fa fa-link"></i> Website</a></span>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>  
        <h3>Experience</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach ($employers as $employer)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#{{ $employer->employerID }}-{{ $employer->employerLogoWidth }}" aria-expanded="false" aria-controls="{{ $employer->employerID }}-{{ $employer->employerLogoWidth }}">
                            <h4 class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        {{ $employer->employerName }}
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="pull-right">
                                        @if ($employer->employerEndDate == 0000-00-00)
                                            {{ date('M Y', strtotime($employer->employerStartDate)) }} - Present
                                        @else
                                            {{ date('M Y', strtotime($employer->employerStartDate)) }} - {{ date('M Y', strtotime($employer->employerEndDate)) }}
                                        @endif
                                        </span>
                                    </div>
                            </h4>
                        </a>
                        </div>
                        <div id="{{ $employer->employerID }}-{{ $employer->employerLogoWidth }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $employer->employerLogo }}" class="center-block" alt="{{ $employer->employerName }} Logo" width="{{ $employer->employerLogoWidth }}%">
                                    <p class="location">
                                        <i class="fa fa-location-arrow"></i> 
                                        <a href="{{ $employer->employerGmapsLink }}" target="_blank"> {{ $employer->employerCity }}, {{ $employer->employerState }}
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        @foreach ($jobs as $job)
                                            @if ($employer->employerID == $job->employerID)
                                                <div class="col-md-12">
                                                    <h4>{{ $job->jobName }}</h4>
                                                    @foreach ($job_descriptions as $job_description)
                                                        @if ($job->jobID == $job_description->jobID)
                                                        <ul>
                                                            <li>{{ $job_description->jobDescription }}</li>
                                                        </ul>
                                                        @endif
                                                    @endforeach 
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>  
        <h3>Skills and Coursework</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree-One">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseThree-One" aria-expanded="false" aria-controls="collapseThree-One">
                        <h4 class="panel-title">
                            Technical Skills
                        </h4>
                    </a>
                    </div>
                    <div id="collapseThree-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Proficient with:</h4>
                                <div class="row">
                                    @foreach ($proficient_technical_skills as $proficient_technical_skill)
                                    <div class="col-md-4 skill">
                                        <img src="{{ $proficient_technical_skill->ptsLogo }}" class="center-block" alt="{{ $proficient_technical_skill->ptsName }} Logo" width="{{ $proficient_technical_skill->ptsLogoWidth }}%">
                                        <h5 class="text-center">{{ $proficient_technical_skill->ptsName }}</h5>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4>Experience with:</h4>
                                <div class="row">
                                    @foreach ($experience_technical_skills as $experience_technical_skill)
                                    <div class="col-md-4 skill">
                                        <img src="{{ $experience_technical_skill->etsLogo }}" class="center-block" alt="{{ $experience_technical_skill->etsName }} Logo" width="{{ $experience_technical_skill->etsLogoWidth }}%">
                                        <h5 class="text-center">{{ $experience_technical_skill->etsName }}</h5>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree-Three">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseThree-Three" aria-expanded="false" aria-controls="collapseThree-Three">
                        <h4 class="panel-title">
                            Coursework
                        </h4>
                    </a>
                    </div>
                    <div id="collapseThree-Three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-Three">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    @foreach ($courses as $course)
                                            <li>{{ $course->courseName }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>  
        <h3>Awards</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach ($awards as $award)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour-One">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#{{ $award->awardID }}-{{ $award->awardLogoWidth }}-A" aria-expanded="false" aria-controls="{{ $award->awardID }}-{{ $award->awardLogoWidth }}-A">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    {{ $award->awardName }}
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">{{ date('M Y', strtotime($award->awardDate)) }}</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="{{ $award->awardID }}-{{ $award->awardLogoWidth }}-A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ $award->awardLogo }}" class="center-block" alt="{{ $award->awardName }} Logo" width="{{ $award->awardLogoWidth }}%">
                                <p class="location">
                                    <i class="fa fa-link"></i> 
                                    <a href="{{ $award->awardWebsiteURL }}" target="_blank"> Website
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>{{ $award->awardSubtitle }}</h4>
                                        <ul>
                                            <li>{{ $award->awardDescription }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div> 
        <h3>References</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive-One">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseFive-One" aria-expanded="false" aria-controls="collapseFive-One">
                        <h4 class="panel-title">
                            References
                        </h4>
                    </a>
                    </div>
                    <div id="collapseFive-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive-One">
                    <div class="panel-body">
                        <p class="text-center" id="references">Available upon Request</p>
                    </div>
                    </div>
                </div>
            </div> 
        <div>
            <p class="text-center" id="download-link"><i class="fa fa-file-pdf-o"></i><a href="https://s3-us-west-2.amazonaws.com/mmilovidov/files/Milovidov-Misha-Resume.pdf" target="_blank">  View Resume as PDF</a></p>
        </div>
    </div>

@stop