@extends('layouts.master')
@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
<div id="dashboard">
    <h1> Dashboard for Freeman's Mowing </h1>
    <div class="dashBody">
        <div class="postContainer">
            <h1>Posts</h1> 
            <div class="postBox">
                <img src="{{url('images/mowgo.png')}}" />
                <div class="pInfo">
                    <h3> Post Title </h3>
                    <h6> DD/MM/YY </h6>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection