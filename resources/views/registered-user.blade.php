@extends('layouts.mainlayout')

@section('title', 'Registered Users')

@section('content')
<h1>New Registered User List </h1>

{{-- <div class="mt-4 d-flex justify-content-end">   
    <a href="/users" class="btn btn-primary ">Approved User List</a><br/>
</div>
<div class="mt-2 d-flex justify-content-end">
    <a href="/users" class="btn btn-secondary">Back</a>
    </div> --}}

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
               @foreach($registeredUsers as $item)
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
                            <a href="/user-detail/{{$item->slug}}" class="btn btn-secondary">Detail</a>
                            {{-- <a href="user-delete/{{$item->slug}}" class="btn btn-danger me-3">Ban User</a> --}}
                        </td>
                    
                </tr>
                @endforeach
            </tbody>
              
                  
     </table>

   </div>

   <div class="mt-4 d-flex justify-content-start">   
    <a href="/users" class="btn btn-primary ">Approved User List</a><br/>
</div>
<div class="mt-2 d-flex justify-content-start">
    <a href="/users" class="btn btn-secondary">Back</a>
    </div>

@endsection