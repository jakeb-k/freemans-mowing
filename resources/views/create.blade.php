@extends('layouts.master')
@section('title')
@if($post->title != "")
<title> Update Post </title>
@else
<title> Create A Post </title> 
@endif
@endsection
@section('content')
<div id="fContainer">
    <a class="back" href="{{url('/posts')}}"><button>BACK</button></a>
    <div id="contactCont">
        @if($post->title != "")
        <form method="POST" action='{{url("/posts/$post->id")}}' id="contact" enctype=multipart/form-data>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <h1> Update Post </h1>
            @else
            <form method=POST action='{{url("/posts")}}' id="contact" enctype=multipart/form-data>
            {{csrf_field()}}
            {{method_field('POST')}}
            <h1> Create a Post! </h1>
            @endif
            
            <div class="cInput">
                <label for="title">TITLE:</label>
                <input type="text" name="title" id="title" value='{{$post->title ?? ""}}' />
                @error('title')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="cInput">
                <label for="description">DESCRIPTION:</label>
                <textarea style="height:100px;" name="description" id="description" placeholder='{{$post->description ?? ""}}'></textarea>
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>

            <div class="cInput">
                <label for="review">CUSTOMER REVIEW:</label>
                <textarea style="height:100px;" name="review" id="review" placeholder='{{$post->review ?? ""}}'></textarea>
                @error('review')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="cInput"  style="margin-bottom:50px;">
                <label for="imageFile[]"> IMAGES: </label> 
                <input id="images" type="file" name="imageFile[]" multiple="mulitple">
                @error('imageFile[]')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            @if($post->title != "")
            <a class="rainbow"  anim="ripple"><button type="submit">UPDATE!</button></a>
            @else
            <a class="rainbow"  anim="ripple"><button type="submit">POST!</button></a>
            @endif
        </form>
    </div>
</div>
<script>
        [].map.call(document.querySelectorAll('[anim="ripple"]'), el=> {
            el.addEventListener('click',e => {
                e = e.touches ? e.touches[0] : e;
                const r = el.getBoundingClientRect(), d = Math.sqrt(Math.pow(r.width,2)+Math.pow(r.height,2)) * 2;
                el.style.cssText = `--s: 0; --o: 1;`;  el.offsetTop; 
                el.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`
            })
        })
    </script>
@endsection