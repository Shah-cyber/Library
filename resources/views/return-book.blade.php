@extends('layouts.mainlayout')

@section('title', 'Book Return')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

              
<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
    <h1 class="mb-4">Book Return Form</h1>

    {{-- @if (session('message'))
    <div class="alert alert-success mb-3 {{session('alert-class')}}">
        {{ session('message') }}
    </div>
    @endif --}}
    <form action="book-return" method="post">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control userbox">
                <option value="">Select User</option>
                @foreach ($users as $item)
                <option value="{{$item->id}}">{{$item->username}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="book_id" id="book" class="form-control userbox">
                <option value="">Select Book</option>
                @foreach ($books as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
        </div>
           <div class="mb-3">
            <button type="submit" class="btn btn-success w-100">Submit</button>
        </div> 
        

    </form>
</div>
                   
                
                    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    <script>
                        $(document).ready(function() {
                        $('.userbox').select2();
                    });
                    </script>


   

    @endsection