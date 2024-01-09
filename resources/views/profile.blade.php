@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
<div class="container-fluid">
    <div class="mt-5">
        <h1>Your Rent Logs</h1>
        <x-rent-log-table :rentlog='$rentlogs' />
    </div>
</div>
    

@endsection