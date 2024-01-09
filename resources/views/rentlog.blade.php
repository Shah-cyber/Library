@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')
<h1>Rent Log List</h1>

    <div class="mt-5">
       <x-rent-log-table :rentlog='$rentlogs' />
    </div>
   

@endsection