@extends('layouts.master')
@section('title')
    <title>Posts</title>
@endsection
@section('content')
<div id="dashboard">
    <div class="dashBody">
        <div class="postContainer">
            <div class="postOps">
                <a href='{{url("/")}}'>
                    <button>HOME</button>
                </a>
                @auth
                <a href='{{url("/posts/create")}}'>
                    <button>ADD POST</button>
                </a>
                @endauth
            </div>
            <h1>Posts</h1> 
            @foreach($posts as $post)
            <div class="postBox">
                <img src="{{url('images/mowgo.png')}}" />
                <div class="pInfo">
                    <h3> {{$post->title}} </h3>
                    <h6> <i> {{$post->date?? date_format($post->created_at, 'jS \of F')}} </i></h6>
                    <p>{{$post->description}}</p>

                    <div class="postOps">

                        <a href='{{url("posts/$post->id")}}'>
                        <button class="postBtn">VIEW</button>
                        </a>
                         
                        @auth
                        <div class="authOps">
                            <a href='{{url("posts/$post->id/edit")}}'>
                            <button class="postBtn">EDIT</button>
                            </a>
                            <form class="opForm" method="POST" action='{{url("posts/$post->id")}}' enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input name="post_id" type="hidden" value="{{$post->id}}" /> 
                                <button type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection