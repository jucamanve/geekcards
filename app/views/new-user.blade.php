@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create User <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('UsersController@createUser') }}" method="post" role="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" />
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('UsersController@allUsersForm') }}" class="btn btn-link">Cancel</a>
    </form>
@stop