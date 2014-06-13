@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit User <small>Go on, mark it complete!</small></h1>
    </div>

    <form action="{{ action('UsersController@updateUser', $user->id) }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $user->id }}">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('UsersController@allUsersForm') }}" class="btn btn-link">Cancel</a>
    </form>
@stop