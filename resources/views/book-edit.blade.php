@extends('layouts.mainlayout')

@section('title', 'Edit Book')



@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<h1>Edit Book</h1>
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
    <form action="/book-edit/{{$book->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-2">
            <label for="code" class="form-label">Book Code</label>
            <input type="text" name="book_code" id="code" class="form-control" placeholder="Book Code" 
            value="{{ $book->book_code }}">
        </div>

        <div class="mt-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Book Title" 
            value="{{$book->title}}">
        </div>

        {{-- cover --}}
        <div class="mt-2">
            <label for="image" class="form-label">Image Cover</label>
            <input type="file" name="image" id="cover" class="form-control" >   
        </div>

        <div class="mt-2">
            <label for="currentImage" class="form-label">Current Image</label>
            <div>
                 @if($book->cover!='')
            <img src="{{asset('storage/cover/'.$book->cover)}}" alt="" width="100px" height="100px">
            @else
            <img src="{{asset('images/missing.png')}}" alt="" width="100px" height="100px">
            @endif
            </div>
           
        </div>

        <div class="mt-2">
            <label for="category" class="form-label">Category</label>
            <select name="categories[]" id="category" class="form-select select-multiple" multiple >
                <option value="">Select Category</option>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-2">
            <label for="currentCategory" class="form-label">Current Category</label>
            <ul>
                @foreach ($book->categories as $category)
                <li>{{$category->name}}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4 ">
            <button class="btn btn-success" type="submit">Save</button>
            <a href="/books" class="btn btn-secondary">Cancel</a>
            
        </div>

    </form>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select-multiple').select2();
});
</script>
@endsection