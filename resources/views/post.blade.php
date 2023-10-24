@extends('layouts.master')
@section('title')
<title> {{$post->title}} </title>
@endsection
@section('content')
<div id="container">
    <div id="articleContainer">
        <a href='{{url("posts")}}'>
            <button>BACK</button>
        </a>
        <div class="aBox">
            <div class="aInfo">
                <h1>{{$post->title}} </h1>
                <h4>{{$post->date}}</h4>
                <h6><i>'{{$post->review}}'</i></h6>
               <p>{{$post->description}} </p> 
            </div>

            <div class="aImg">
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides1" src="{{url('images/'.$img)}}" /> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs1(+1)" style="max-width:120%;">&#10095;</button>
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