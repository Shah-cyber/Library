@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
<h1>User List </h1>

<div class="mt-4 d-flex justify-content-end">
    <a href="/user-banned" class="btn btn-secondary me-2">View Banned User</a><br/>
    <a href="/registered-users" class="btn btn-primary ">Registered User</a><br/>
</div>

<div class="mt-5">
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
</div>

   <div class="my-5">
     <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->username}}</td>
                    <td>
                        @if ($item->phone)
                            {{$item->phone}}
                        @else
                         -
                        @endif
                    </td>
                    <td>{{$item->address}}</td>
                    
                        <td>
                            <div class="dropup-center dropup">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Actions
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item"  href="/user-detail/{{$item->slug}}" class="btn btn-secondary">Detail</a></li>
                                  <li><a class="dropdown-item" href="/user-ban/{{$item->slug}}" class="btn btn-danger me-3">Ban User</a></li>
                                 
                                </ul>
                              </div>
                            {{-- <a href="/user-detail/{{$item->slug}}" class="btn btn-secondary">Detail</a>
                            <a href="/user-ban/{{$item->slug}}" class="btn btn-danger me-3">Ban User</a> --}}
                        </td>
                    
                </tr>
                    
                @endforeach
     </table>
    
     {{ $users->links('pagination::bootstrap-5') }}
   </div>

@endsection