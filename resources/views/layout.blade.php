<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- general meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- unique meta -->
        @yield('uniqueMetadata')

        <!-- title -->
        <title>@yield('title')</title>

        <!-- favicon -->
        <link rel="icon" type="image/ico" href="favicon.ico">

        <!-- stylesheets -->
        <link rel="stylesheet" href="css/app.css">
        
    </head>
    <body class="container">
        <!-- Header -->
        <div>@include('layout.header')</div> 
                
        <!-- Content -->
        <div>@yield('content')</div>

        <!-- Footer -->
        <div>@include('layout.footer')</div>

        <!-- jquery -->
        <script src="js/app.js"></script>
    </body>
</html>
