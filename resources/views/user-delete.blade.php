@extends('layouts.mainlayout')

@section('title', 'Delete User')



@section('content')
<div class="container">
    <h1>Are you sure to delete user?</h1>
    <h2> : {{$user->username}}</h2>

    <div class="mt-3">
         <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-2">Delete</a>
        <a href="/users" class="btn btn-secondary">Cancel</a>

    </div>
       
</div>


@endsection