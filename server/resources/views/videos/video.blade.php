@extends('bootstrap')
<head>
    <title>{{$video->title}}</title>
</head>
<a type="button" class="btn btn-secondary" href="{{ route('video.index') }}">Back to list of video</a>
<div class="card mt-3" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: {{$video->id}}</li>
        <li class="list-group-item">Owner: {{$video->user->name}}</li>
        <li class="list-group-item">Title: {{$video->title}}</li>
        <li class="list-group-item">Description: {{$video->description}}</li>
        <li class="list-group-item">Created: {{$video->created_at->format('d/m/y H:i:s')}}</li>
        <li class="list-group-item">Updated: {{$video->updated_at->format('d/m/y H:i:s')}}</li>
    </ul>
</div>
