        @extends('layouts.mainlayout')

        @section('title', 'Category')

      

        @section('content')
        <h1>Categories List</h1>
        <div class="mt-4 d-flex justify-content-end">
            <a href="category-deleted" class="btn btn-secondary me-2">View Deleted Category</a><br/>
            <a href="category-add" class="btn btn-primary ">Create New Category</a><br/>
        </div>

       <div class="mt-5">
              @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
                
              @endif
       </div>
      

        <div class="my-1">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Category Name</th>
                        <th>Category Action</th>
                                                                   
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td style="font-weight: bold; color: rgb(0, 0, 0)0, 0, 0);">{{$item->name}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Action
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="category-edit/{{$item->slug}}" class="btn btn-secondary">Edit Category</a></li>
                                  <li><a class="dropdown-item" href="category-delete/{{$item->slug}}" class="btn btn-danger me-2">Delete Category</a></li>
                                  
                                </ul>
                              </div>

                            {{-- <a href="category-edit/{{$item->slug}}" class="btn btn-secondary">Edit Category</a>
                            <a href="category-delete/{{$item->slug}}" class="btn btn-danger me-2">Delete Category</a> --}}
                        </td>
                       
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links('pagination::bootstrap-5') }}
        </div>

        

        @endsection