@extends('layouts.mainlayout')

@section('title', 'Deleted Book')



@section('content')
<h1>Deleted Books List</h1>

<div class="mt-4 d-flex justify-content-end">
    <a href="/books" class="btn btn-primary ">Back</a><br/>
</div>


<div class="mt-5">
      @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
        
      @endif
</div>



<div class="my-3">
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                {{-- <th>Category</th> --}}
                <th>Action</th>
                                                           
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedBooks as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->book_code}}</td>
                <td>{{$item->title}}</td>
                {{-- <td>
                    @foreach ($item->categories as $category)
                    <span class="badge bg-success">{{$category->name}}</span>
                    @endforeach
                </td> --}}
                <td>
                    <a href="book-restore/{{$item->slug}}" class="btn btn-secondary">Restore Book</a>
                    
                </td>
               
                
            </tr>
                
            @endforeach
        </tbody>
    </table>
    
</div>



@endsection