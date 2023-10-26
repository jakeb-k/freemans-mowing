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
                    <div class="slideBox">
                        @foreach($aImages as $img)
                            <img class="mySlides1 w3-animate-fading" src="{{ asset('storage/images/'.$img) }}" />
                        @endforeach
                    </div>
                    <div class="slideBox">
                        @foreach($bImages as $img)
                            <img class="mySlides2 w3-animate-fading" src="{{ asset('storage/images/'.$img) }}" />
                        @endforeach
                    </div>
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
<script>
 $(function () {
    //viewport funcs - bush click
            $('.vine-button') .click(function () {
            $('html, body') .animate ({
                scrollTop: $("#serviceCont").offset().top + $("#serviceCont")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
        $(function () {
            $('.contactBtn') .click(function () {
            $('html, body') .animate ({
                scrollTop: $("#serviceCont").offset().top + $("#serviceCont")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
    //bounding box for about sec
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    //bounding box for contact form bush
        function isElementInViewport2(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight*8 || document.documentElement.clientHeight*8) &&
                rect.right <= (window.innerWidth*8 || document.documentElement.clientWidth*8)
            );
        }
    //scroll to about section
        function handleScroll() {
            var elements = document.querySelectorAll('#serviceCont');
            elements.forEach(function(element) {
                if (isElementInViewport(element)) {
                    element.classList.add('in-view');
                }
            });
        }
    //scroll to contact form
        function handleScroll2() {
            var image = document.querySelector('.fade-image');

            if (isElementInViewport2(image)) {
                image.style.opacity = 1;
                
                return true; /* If the image is in the viewport, make it invisible */
            } else {
                image.style.opacity = 0;
                image.style.postion = 'relative'; 
                return false; /* If it's not in the viewport, hide it */
            }
        }
        //event listeners for all the funcs
        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);
        handleScroll(); // Call this initially to check on page load

        window.addEventListener('scroll', handleScroll2);
        window.addEventListener('resize', handleScroll2);
        handleScroll2();

    //auto slideshow var init and func call
    var slideIndex1 = 0;
    var slideIndex2 = 0;
    carousel2();
    carousel1();

    //auto slideshow 1 function
    function carousel1() {
     
    var x = document.getElementsByClassName("mySlides1");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex1++;
    
    if (slideIndex1 > x.length) {slideIndex1 = 1}
    
    x[slideIndex1-1].style.display = "block";
    setTimeout(carousel1, 4500); // Change image every 4 seconds
    }
    //auto slideshow 2 function
    function carousel2() {
     
    var x = document.getElementsByClassName("mySlides2");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex2++;
    
    if (slideIndex2 > x.length) {slideIndex2 = 1}
    
    x[slideIndex2-1].style.display = "block";
    setTimeout(carousel2, 4500); // Change image every 4 seconds
    
    }
</script>
@endsection