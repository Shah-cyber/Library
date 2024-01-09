@extends('layouts.mainlayout')

@section('title', 'Add Category')



@section('content')
<h1>Add New Category</h1>
<div class="mt-5 w-50">
    
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif
    <form action="category-add" method="post">
        @csrf
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
        </div>
        <div class="mt-4 ">
            <button class="btn btn-success" type="submit">Save</button>
            <a href="categories" class="btn btn-primary ">Back</a>
        </div>

    </form>
</div>




@endsection