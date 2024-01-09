@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<h1>Book List</h1>

<div class="float-end mt-2">
    <form action="{{ route('search.books') }}" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Code">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>

<div class="my-3">
     <a href="book-add" class="btn btn-primary my-2">Add New Book</a> 
    <!-- Add New Book Button -->
<button id="openAddBookModal" class="btn btn-primary my-2">Add New Book</button>
    <a href="book-deleted" class="btn btn-secondary me-2">View Deleted Book</a><br/>

</div>


    <div class="mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
    </div>

   
    

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <span class="badge bg-secondary text-bg-warning">{{$item->book_code}}</span>
                    
                </td>
                <td style="font-weight: bold; color: rgb(0, 0, 0)0, 0, 0);">
                    {{$item->title}}
                </td>
                
                <td>
                    @foreach ($item->categories as $category)
                    <span class="badge rounded-pill text-bg-warning">{{$category->name}}</span>
                    @endforeach
                </td>
                <td>
                    <span class="badge custom-badge" style="background-color: <?php echo $item->status === 'in stock' ? '#66ff66' : '#ff3333'; ?>"><?php echo $item->status; ?></span>
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/book-edit/{{$item->slug}}" class="btn btn-secondary">Edit Book</a></li>
                          <li><a class="dropdown-item" href="/book-delete/{{$item->slug}}" class="btn btn-danger me-2 ">Delete Book</a></li>
                          
                        </ul>
                      </div>
                    {{-- <a href="/book-edit/{{$item->slug}}" class="btn btn-secondary">Edit Book</a>
                    <a href="/book-delete/{{$item->slug}}" class="btn btn-danger me-2 ">Delete Book</a> --}}
                </td>
              
                
            </tr>
                
            @endforeach

    </table>
    @if ($books->count())
    {{ $books->links('pagination::bootstrap-5') }}
    @else
    <div class="alert alert-warning">
        No data
        </div>
    @endif
    @stop
    @section('css')
    <style>
        .custom-badge{
            padding: 5px 10px;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            background-color: #ff3333;
            border-radius: 5px;
        }
    </style>
    @endsection
    @section('js')
    <script>
        $(document).ready(function(){
            $('#statusModal').modal('show');
        });
    </script>
    
   


</div>

  

<script>
    $(document).ready(function() {
        // Open the modal when the button is clicked
        $('#openAddBookModal').click(function() {
            $('#addBookModal').show();
        });

        // Close the modal when the close button is clicked
        $('.close').click(function() {
            $('#addBookModal').hide();
        });
    });
</script>

@endsection


