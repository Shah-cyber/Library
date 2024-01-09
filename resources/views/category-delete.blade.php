@extends('layouts.mainlayout')

@section('title', 'Delete Category')



@section('content')
<div class="container">
    <h1>Are you sure to delete category?</h1>
    <h2> : {{$category->name}}</h2>

    <div class="mt-3">
         <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger me-2">Delete</a>
        <a href="/categories" class="btn btn-secondary">Cancel</a>

    </div>
       
</div>


@endsection