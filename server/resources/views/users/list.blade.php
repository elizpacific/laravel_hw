@extends('bootstrap')

<head>
    <title>List of users</title>
</head>
<a type="button" class="btn btn-primary" href="{{ route('welcome') }}">Back to main page</a>
<table class="table table-success table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>

        <th scope="row">{{$user->id}}</th>
        <td>
            <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a>
        </td>
        <td>
            <a>{{ $user->email }}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

