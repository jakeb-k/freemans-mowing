@extends('layouts.master')
@section('title')
    <title>Posts</title>
@endsection
@section('content')
<div id="dashboard">

            <div class="postOps">

                <a class="sBtn" href='{{url("/")}}' style=" color:#006400;
                                                font-family:'Work Sans', sans-serif;
                                                font-size:20px; 
                                                text-decoration:'underline'; ">
                    <span>HOME</span>
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
                    <p><i>{{$post->review}}</i></p>

                    <div class="postOps">

                        <a href='{{url("posts/$post->id")}}'>
                        <button class="tBtn">
                            VIEW
                            <svg width="79" height="46" viewBox="0 0 79 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_f_618_1123)">
                                    <path d="M42.9 2H76.5L34.5 44H2L42.9 2Z" fill="url(#paint0_linear_618_1123)"/>
                                </g>
                                <defs>
                                    <filter id="filter0_f_618_1123" x="0" y="0" width="78.5" height="46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                        <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_618_1123"/>
                                    </filter>
                                    <linearGradient id="paint0_linear_618_1123" x1="76.5" y1="2.00002" x2="34.5" y2="44" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.6"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.05"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </button>
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
@endsection