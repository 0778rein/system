@extends('completed.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $completed->name }}</h5>
        <p class="card-text">Address : {{ $completed->address }}</p>
        <p class="card-text">Mobile : {{ $completed->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>