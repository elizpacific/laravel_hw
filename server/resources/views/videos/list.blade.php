@extends('bootstrap')

<head>
    <title>List of video</title>
</head>
<a type="button" class="btn btn-primary" href="{{ route('welcome') }}">Back to main page</a>
<table class="table table-success table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($videos as $video)
        <tr>

            <th scope="row">{{$video->id}}</th>
            <td>
                <a href="{{ route('video.show', $video) }}">{{ $video->title }}</a>
            </td>
            <td>
                <a>{{ $video->description }}</a>
            </td>
            <td>
                <a>{{ $video->content }}</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
