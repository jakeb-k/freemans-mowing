@extends('layouts.master')
@section('title')
<title>Freeman's Mowing</title>   
@endsection
@section('content')
        <div id="container">
            <div id="splashCont">
                <div class="cta">
                    <h1>If you want your lawn to look immaculate, don't wait any longer.</h1>
                    <h3>Contact our lawn mowing experts today for a beautifully manicured yard that will make your neighbors green with envy! <span class="heart-beat"><button class="vine-button" style="color:white;">CONTACT NOW →</button></span>
                    <span style="font-size:16px; font-style:italic">Click to trim the pesky bush</span></h3>
                </div>
                <div class="before-after">
                    <div>
                        <h1>BEFORE</h1>
                    </div>
                    <div>
                        <h1> AFTER </h1>
                    </div> 
                </div>
                <div class="slideshow">
                    <div class="slideBox"></div>
                    <div class="slideBox"></div>
                </div>
                <div class="testimonials">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval=4500>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h3 style="text-align:center; color:#006400">"I can't believe how pristine my lawn looks now! This lawn mowing service is the real deal."</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align:center; color:#006400">"Exceptional attention to detail. My yard has never looked better."</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align:center; color:#006400">"Reliable, professional, and affordable. I highly recommend their lawn care services."</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align:center; color:#006400">"I've tried many lawn care companies, but this one stands out. My garden is thriving."</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align:center; color:#006400">"Quick response, friendly staff, and a beautiful lawn. What more could you ask for?"</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="serviceCont">
                <h1 class="animated-title">What I can do for YOU!</h1>
                <div id="serHolder">
                    <div class="serBox">
                        <ul class="animated-list">
                            <li>Lawn Mowing</li>
                            <li>Grass Trimming and Edging</li>
                            <li>Weed Control and Removal</li>
                            <li>Fertilization and Soil Treatment</li>
                            <li>Lawn Aeration</li>
                            <li>Seeding and Sod Installation</li>
                            <li>Lawn Dethatching</li>
                        </ul>
                    </div>
                    <div class="serBox">
                        <ul class="animated-list">
                           <li>Irrigation System Installation and Maintenance</li>
                            <li>Landscape Design and Installation</li>
                            <li>Pest and Disease Control for Lawns</li>
                            <li>Mulching and Bed Maintenance</li>
                            <li>Seasonal Cleanups (Spring and Fall)</li>
                            <li>Tree and Shrub Pruning</li>
                            <li>Leaf Removal</li>
                        </ul>
                    </div>
                </div>
         
            </div>

            <div id="contactCont">
                 <form method="POST" action='{{url("/contact")}}' id="contact">
                    {{csrf_field()}}
                    <h1>Get a Free Quote Today!</h1>
                    <div class="cInput">
                        <label for="name">NAME:</label>
                        <input type="text" name="name" id="name" />
                        @error('name')
                        <div class="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="cInput">
                        <label for="email">EMAIL:</label>
                        <input type="text" name="email" id="email" />
                        @error('email')
                        <div class="alert">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="cInput">
                        <label for="note">JOB DESCRIPTION:</label>
                        <textarea name="note" id="note"></textarea>
                        @error('note')
                        <div class="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <a class="rainbow"  anim="ripple"><button type="submit">SEND!</button></a>
                </form>
            <img src="{{url('images/bBush.png')}}" alt="Image to Fade" class="fade-image">
            </div>
            
@endsection