<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/JackSparrow.css')}}">    
    <link rel="stylesheet" href="{{asset('css/Tomas.css')}}">    
    <link rel="stylesheet" href="{{asset('css/DavyJones.css')}}">

    <link rel="icon" href="{{asset('images/favicon.png')}}">
    
     <title>{{  $title ?? '' }}</title> 
    
</head>
<body> 
    @include('inc.navigation')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('inc.messages')
            </div>
        </div>         
        @yield('content')   
    </div> 
</body>
</html>