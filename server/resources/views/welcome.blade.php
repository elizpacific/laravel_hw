@extends('bootstrap')

<html>
    <head>
         <title>Main Page</title>
    </head>
    <a type="button" class="btn btn-primary" href="{{ route('user.index') }}">List of users</a>
    <a type="button" class="btn btn-primary" href="{{ route('video.index') }}">List of video</a>
</html>



