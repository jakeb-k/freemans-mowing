@extends('layouts.master')
@section('title')
    <title>POSTS</title>
@endsection
@section('content')
<div id="dashboard">
    <div class="dashBody">
        <div class="postContainer">
            <a href='{{url("/")}}'>
                <button>HOME</button>
            </a>
            <h1>Posts</h1> 
            @foreach($posts as $post)
            <div class="postBox">
                <img src="{{url('images/mowgo.png')}}" />
                <div class="pInfo">
                    <h3> {{$post->title}} </h3>
                    <h6> <i> {{$post->date}} </i></h6>
                    <p>{{$post->description}}</p>
                    <a href='{{url("posts/$post->id")}}'>
                    <button class="postBtn">VIEW</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection