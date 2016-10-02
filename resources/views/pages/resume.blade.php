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
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne-One">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseOne-One" aria-expanded="false" aria-controls="collapseOne-One">
                            <h4 class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        Brigham Young University
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="pull-right">Apr 2018</span>
                                    </div>
                                </div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapseOne-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/byu-logo.png" class="center-block" alt="BYU Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/Brigham+Young+University/@40.2518435,-111.6515043,17z/data=!3m1!4b1!4m5!3m4!1s0x874d90bc4aa0b68d:0xbf3eb3a3f30fdc4c!8m2!3d40.2518435!4d-111.6493156" target="_blank"> Provo, UT
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Bachelor of Science, Information Systems</h4>
                                        <h5>GPA: 3.54</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h4 id="clubs-label">Clubs:</h4>
                                            </div>
                                            <div class="col-md-3 clubs">
                                                <img src="img/ais-logo.png" class="center-block" alt="BYU Logo" width="40%">
                                                <h5 class="text-center">Association of Information Systems</h5>
                                                <span><a href="http://ais.byu.edu" target="_blank"><i class="fa fa-link"></i> Website</a></span>
                                            </div>
                                            <div class="col-md-3 clubs">
                                                <img src="img/byudev-logo.png" class="center-block" alt="BYU Logo" width="40%">
                                                <h5 class="text-center">BYU Developers Club</h5>
                                                <span><a href="http://dev.byu.edu" target="_blank"><i class="fa fa-link"></i> Website</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne-Two">
                        <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseOne-Two" aria-expanded="false" aria-controls="collapseOne-Two">
                            <h4 class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        Pueblo East High School
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="pull-right">May 2011</span>
                                    </div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapseOne-Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-Two">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/ehs-logo.png" class="center-block" alt="EHS Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/East+High+School/@38.289738,-104.5796513,17z/data=!3m1!4b1!4m5!3m4!1s0x8713a39a94359e81:0x5dfd2761099cd5a6!8m2!3d38.289738!4d-104.5774626" target="_blank"> Pueblo, CO
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Valedictorian</h4>
                                        <h5>GPA: 4.0</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h4 id="clubs-label">Clubs:</h4>
                                            </div>
                                            <div class="col-md-3 clubs">
                                                <img src="img/nhs-logo.png" class="center-block" alt="NHS Logo" width="40%">
                                                <h5 class="text-center">National Honor Societyz</h5>
                                                <span><a href="https://www.nhs.us/?SSO=true" target="_blank"><i class="fa fa-link"></i> Website</a></span>
                                            </div>
                                            <div class="col-md-3 clubs" id="move-down">
                                                <img src="img/mesa-logo.png" class="center-block" alt="MESA Logo" width="100%">
                                                <h5 class="text-center">Math Engineering Science Achievement</h5>
                                                <span><a href="http://mesausa.org" target="_blank"><i class="fa fa-link"></i> Website</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>  
        <h3>Experience</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo-One">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseTwo-One" aria-expanded="false" aria-controls="collapseTwo-One">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    doTERRA International, LLC.
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Feb 2015 - Present</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseTwo-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/doterra-logo.png" class="center-block" alt="doTERRA Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/doTERRA+International/@40.3596843,-111.7609011,17z/data=!3m1!4b1!4m5!3m4!1s0x874d8408fc057f87:0x4b41a6ac860bd7de!8m2!3d40.3596843!4d-111.7587124" target="_blank"> Pleasant Grove, UT
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Web Developer</h4>
                                        <ul>
                                            <li>Maintain and improve 25 corporate websites by leveraging skills in PHP, SQL, AngularJS, and HTML/CSS</li>
                                            <li>Implement an enterprise-level content management system in 16 countries by performing initial user tests and training other employees</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Work Force Manager</h4>
                                        <ul>
                                            <li>Examined six years of data to accurately forecast scheduling needs for an 800-employee call center</li>
                                            <li>Created an interactive dashboard in MS Excel utilized by 10 managers to analyze department performance</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo-Two">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseTwo-Two" aria-expanded="false" aria-controls="collapseTwo-Two">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    HomeBase AMC
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Apr 2016 - Present</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseTwo-Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-Two">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/homebase-logo.png" class="center-block" alt="Homebase AMC Logo" width="80%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/Provo,+UT/@40.2573138,-111.7089457,12z/data=!3m1!4b1!4m5!3m4!1s0x874d9271930bf1bf:0x1d90f12600b556ef!8m2!3d40.2338438!4d-111.6585337" target="_blank"> Provo, UT
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Website Maintenance Specialist</h4>
                                        <ul>
                                            <li>Maintain an order-management website for home appraisals using Codeignitor and Laravel development frameworks by responding to feedback from 20+ administrative users</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo-Three">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseTwo-Three" aria-expanded="false" aria-controls="collapseTwo-Three">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    Missionary Mailbag
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Jan 2016 - Present</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseTwo-Three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-Three">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/mm-logo.png" class="center-block" alt="Missionary Mailbag Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/Lehi,+UT/@40.4139652,-111.9038149,13z/data=!3m1!4b1!4m5!3m4!1s0x874d7fedd81a1b69:0xfd6fac81600d61c9!8m2!3d40.3916172!4d-111.8507662" target="_blank"> Lehi, UT
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Customer Support Agent</h4>
                                        <ul>
                                            <li>Improved customer satisfaction by having a chat satisfaction score of 100% positive and increasing email response time by 100%</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Quality Assurance Specialist</h4>
                                        <ul>
                                            <li>Performed quality assurance on company website by identifying and resolving several application issues</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Marketing Intern</h4>
                                        <ul>
                                            <li>Established company strategy in order to acquire 20 new business-to-business relations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo-Four">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseTwo-Four" aria-expanded="false" aria-controls="collapseTwo-Four">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    Brigham Young University
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Aug 2014 - Aug 2015</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseTwo-Four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-Four">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/byu-logo.png" class="center-block" alt="BYU Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/Brigham+Young+University/@40.2518435,-111.6515043,17z/data=!3m1!4b1!4m5!3m4!1s0x874d90bc4aa0b68d:0xbf3eb3a3f30fdc4c!8m2!3d40.2518435!4d-111.6493156" target="_blank"> Provo, UT
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Lab and Kiosk Technician</h4>
                                        <ul>
                                            <li>Trained new hires on Active Directory and Group Policy Management as the team grew from one member to five in two weeks</li>
                                            <li>Worked with more than 20 university departments to resolve problems in computer labs and printing kiosks</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Lab Shift Supervisor</h4>
                                        <ul>
                                            <li>Administered training and guidance for over 30 lab attendants in four different open access computer labs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo-Four">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseTwo-Five" aria-expanded="false" aria-controls="headingTwo-Five">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    LDS Church
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Jul 2012 - Jul 2014</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseTwo-Five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-Five">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/ldschurch-logo.png" class="center-block" alt="LDS Church Logo" width="80%">
                                <p class="location">
                                    <i class="fa fa-location-arrow"></i> 
                                    <a href="https://www.google.com/maps/place/Portland,+OR/@45.5424151,-122.7244613,12z/data=!3m1!4b1!4m5!3m4!1s0x54950b0b7da97427:0x1c36b9e6f6d18591!8m2!3d45.5230622!4d-122.6764816" target="_blank"> Portland, OR
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Spanish-Speaking Volunteer Representative</h4>
                                        <ul>
                                            <li>Provided service and taught Christian principles to Latino families</li>
                                            <li>Motivated, supervised, and trained 80 other volunteers in teaching, communication, and leadership skills</li>
                                            <li>Contributed to a 100% increase in teaching and service productivity in multiple areas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
                                    <div class="col-md-4 skill">
                                        <img src="img/git-logo.png" class="center-block" alt="Git Logo" width="30%">
                                        <h5 class="text-center">Git</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/htmlcssjavascript-logo.png" class="center-block" alt="HTML/CSS/Javascript Logo" width="60%">
                                        <h5 class="text-center">HTML/CSS/Javascript</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/bootstrap-logo.png" class="center-block" alt="PHP Logo" width="30%">
                                        <h5 class="text-center">Bootstrap Framework</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 skill">
                                        <img src="img/php-logo.png" class="center-block" alt="PHP Logo" width="30%">
                                        <h5 class="text-center">PHP</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/wp-logo.png" class="center-block" alt="WordPress Logo" width="35%">
                                        <h5 class="text-center">WordPress</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/sql-logo.png" class="center-block" alt="SQL Logo" width="35%">
                                        <h5 class="text-center">SQL</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 skill">
                                        <img src="img/cplusplus-logo.png" class="center-block" alt="C++ Logo" width="50%">
                                        <h5 class="text-center">C++</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/office-logo.png" class="center-block" alt="Microsoft Office Logo" width="30%">
                                        <h5 class="text-center">Microsoft Office</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/vba-logo.png" class="center-block" alt="VBA Logo" width="50%">
                                        <h5 class="text-center">VBA</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4>Experience with:</h4>
                                <div class="row">
                                    <div class="col-md-4 skill">
                                        <img src="img/codeigniter-logo.png" class="center-block" alt="SEO Logo" width="40%">
                                        <h5 class="text-center">Codeigniter Framework</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/laravel-logo.png" class="center-block" alt="SEO Logo" width="40%">
                                        <h5 class="text-center">Laravel Framework</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/seo-logo.png" class="center-block" alt="SEO Logo" width="40%">
                                        <h5 class="text-center">SEO</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 skill">
                                        <img src="img/photoshop-logo.png" class="center-block" alt="Photoshop Logo" width="40%">
                                        <h5 class="text-center">Photoshop</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/angular-logo.png" class="center-block" alt="AngularJS Logo" width="38%">
                                        <h5 class="text-center">AngularJS</h5>
                                    </div>
                                    <div class="col-md-4 skill">
                                        <img src="img/activedirectory-logo.png" class="center-block" alt="Active Directory Logo" width="40%">
                                        <h5 class="text-center">Active Directory</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!--<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree-Two">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseThree-Two" aria-expanded="false" aria-controls="collapseThree-Two">
                        <h4 class="panel-title">
                            Other Skills
                        </h4>
                    </a>
                    </div>
                    <div id="collapseThree-Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-Two">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>-->
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
                                    <li>Programming in C++</li>
                                    <li>Websites in PHP</li>
                                    <li>SQL Basics</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>SEO Basics</li>
                                    <li>Version Control with Git</li>
                                    <li>Javascript Basics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>  
        <h3>Awards</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour-One">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseFour-One" aria-expanded="false" aria-controls="collapseFour-One">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    Eagle Scout Award
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">Apr 2011</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseFour-One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-One">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/eaglescout-logo.png" class="center-block" alt="Eagle Scout Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-link"></i> 
                                    <a href="http://www.nesa.org/trail.html" target="_blank"> Website
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Rocky Mountain Council - Troop 36</h4>
                                        <ul>
                                            <li>Eagle Scout is the highest achievement or rank attainable in the Boy Scouting program of the Boy Scouts of America (BSA). The designation "Eagle Scout" has a long history since its founding over one hundred years ago. Only four percent of Boy Scouts are granted this rank after a lengthy review process. The requirements necessary to achieve this rank take years to fulfill. Requirements include earning at least 21 merit badges. The Eagle Scout must demonstrate Scout Spirit, an ideal attitude based upon the Scout Oath and Law, service, and leadership. This includes an extensive service project that the Scout plans, organizes, leads, and manages. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour-Two">
                    <a class="collapsed panel-title-link" role="button" data-toggle="collapse" data-parent="accordion" href="#collapseFour-Two" aria-expanded="false" aria-controls="collapseFour-Two">
                        <h4 class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    International Baccalaureate Graduate
                                </div>
                                <div class="col-xs-6">
                                    <span class="pull-right">May 2011</span>
                                </div>
                        </h4>
                    </a>
                    </div>
                    <div id="collapseFour-Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-Two">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/ib-logo.png" class="center-block" alt="IB Logo" width="50%">
                                <p class="location">
                                    <i class="fa fa-link"></i> 
                                    <a href="http://www.ibo.org/about-the-ib/" target="_blank"> Website
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Pueblo City Schools</h4>
                                        <ul>
                                            <li>Awarded to students who complete a program made up of six subject groups as well as the program core, comprising theory of knowledge (TOK), creativity, activity, service (CAS) and the extended essay. Awarded to students who reflect on the nature of knowledge, complete independent research and undertake a project that often involves community service.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
            <p class="text-center" id="download-link"><i class="fa fa-file-pdf-o"></i><a href="files/Milovidov-Misha-Resume.pdf" target="_blank">  View Resume as PDF</a></p>
        </div>
    </div>

@stop