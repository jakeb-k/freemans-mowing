@extends('layouts.master')
@section('title')
<title> {{$post->title}} </title>
@endsection
@section('content')
<div id="container">
    <div id="articleContainer">
        <a href='{{url("posts")}}'>
           <button class="tBtn">
            BACK
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
        <div class="aBox">
            <div class="aInfo">
                <h1>{{$post->title}} </h1>
                <h4>{{$post->date ?? date_format($post->created_at, 'l jS \of F')}}</h4>
                <h6><i>'{{$post->review}}'</i></h6>
               <p>{{$post->description}} </p> 
            </div>

            <div class="aImg">
                <div class="w3-content w3-display-container">
                    <?php $image = explode(",", $post->images); ?> 
                    
                    <img class="mySlides1 w3-animate-opacity" src="{{ asset('storage/images/'.$image[1]) }}" /> 
                    <img class="mySlides1 w3-animate-opacity" src="{{ asset('storage/images/'.$image[0]) }}" /> 

                    <button class="w3-button w3-display-left" style="background:#ccff00;" onclick="plusDivs1(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" style="background:#ccff00;" onclick="plusDivs1(+1)" style="max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        var slideIndex1 = 1;
        showDivs1(slideIndex1);

        function plusDivs1(n) {
        showDivs1(slideIndex1 += n);
        }

        function showDivs1(n) {
        var i;
        var x = document.getElementsByClassName("mySlides1");
        if (n > x.length) {slideIndex1 = 1}
        if (n < 1) {slideIndex1 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex1-1].style.display = "block";
        }
    </script>
@endsection