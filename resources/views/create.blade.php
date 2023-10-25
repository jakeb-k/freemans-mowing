@extends('layouts.master')
@section('title')
<title> Create A Post </title>
@endsection
@section('content')
<div id="fContainer">
    <a class="back" href="{{url('/posts')}}"><button>BACK</button></a>
    <div id="contactCont">
        <form method="POST" action='{{url("/posts")}}' id="contact">
            {{csrf_field()}}
            <h1>Make a new Post!</h1>
            <div class="cInput">
                <label for="title">TITLE:</label>
                <input type="text" name="title" id="title" />
                @error('title')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="cInput">
                <label for="description">DESCRIPTION:</label>
                <textarea style="height:100px;" name="description" id="description"></textarea>
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>

            <div class="cInput" style="margin-bottom:50px;">
                <label for="review">CUSTOMER REVIEW:</label>
                <textarea style="height:100px;" name="review" id="review"></textarea>
                @error('review')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            
            <a class="rainbow"  anim="ripple"><button type="submit">POST!</button></a>
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