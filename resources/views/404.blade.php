@extends('layout.master.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <p class="clearfix"></p>
        <h2 class="text-center"
            style=" text-shadow: 1px 1px 0px black, 0 0 2px #ccc, 0 0 5px darkblue;">Welcome to Merlions Travels</h2>
        <hr/>
        <h3 class="text-center">Something went wrong please try again <a href="{{url('dashboard')}}">Click here</a></h3>

    </div>

@stop