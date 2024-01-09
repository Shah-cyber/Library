@extends('layouts.mainlayout')

@section('title', 'Delete Book')



@section('content')
<div class="container">
    <h1>Are you sure to delete this book ? </h1>
    <h2> : {{$book->title}}</h2>

    <div class="mt-3">
         <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger me-2">Delete</a>
         <a href="/books" class="btn btn-secondary">Cancel</a>

    </div>
       
</div>


@endsection