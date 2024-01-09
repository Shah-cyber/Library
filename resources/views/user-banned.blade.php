@extends('layouts.mainlayout')

@section('title', 'Banned User')

@section('content')
<h1> Banned User List </h1>



<div class="mt-5">
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
</div>

   <div class=" table table-striped my-5">
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
                @foreach ($bannedUsers as $item)
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
                            <a href="/user-restore/{{$item->slug}}" class="btn btn-secondary">Restore  User</a>
                            
                        </td>
                    
                </tr>
                    
                @endforeach

                
     </table>

                    <div class="mt-2 d-flex justify-content-start">
                    <a href="/users" class="btn btn-secondary">Back</a>
                    </div>
   </div>

@endsection