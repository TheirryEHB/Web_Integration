<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/projectpage_css.css')}}" type="text/css">

    <title>Document</title>
</head>
<body>


<!--Hoofdding-->
<header>
</header>

@extends('layouts.master')


@section('projectsection1')
<div class="grid-container1">

    <div class="projectExpl">
        <h4>This page is where al my projects will be explained.
            What projects am I working on, which ones will I do in the future and wich ones have I already finisched.
        </h4>
        <p></p>
    </div>

    <div class="card pro prj1" >
        <div class="card-body">
            <h5 class="card-title">Ultimata Discordbot</h5>
            <p class="card-text">Ultimata, a bot that I created for a school assignment.
                <br>Now of course I am not planning on putting all my school project on here. But Ultimata is ultimatly a convertion of all
                the Discordbots I had made up untill then.
                That is why a chose to still add it to the page.
            </p>
            <!-- <a href="https://www.linkedin.com/in/thierry-klougbo-880b071b1/"  target="_blank" class="btn btn-primary">Path to discord server</a> -->
        </div>
    </div>
@endsection
</body>
</html>
