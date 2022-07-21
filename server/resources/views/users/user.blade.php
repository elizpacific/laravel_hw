@extends('bootstrap')
<head>
    <title>{{$user->name}}</title>
</head>
<a type="button" class="btn btn-secondary" href="{{ route('user.index') }}">Back to list of users</a>
<div class="card mt-3" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: {{$user->id}}</li>
        <li class="list-group-item">Name: {{$user->name}}</li>
        <li class="list-group-item">Email: {{$user->email}}</li>
        <li class="list-group-item">Created: {{$user->created_at->format('d/m/y H:i:s')}}</li>
        <li class="list-group-item">Updated: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
    </ul>
</div>
