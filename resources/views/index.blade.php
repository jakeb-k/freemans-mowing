<!DOCTYPE html>
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Freeman's Mowing</title>
      
        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.scss')}}" type="text/css">
        
       <link href="{{asset('fontawesome-free-6.4.0-web/css/brands.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/fontawesome.css')}}" rel="stylesheet">
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/solid.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
    </head>
    <script>
        $(function () {
            $('.vine-button') .click(function () {
            $('html, body') .animate ({
                scrollTop: $("#serviceCont").offset().top + $("#serviceCont")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
        
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function handleScroll() {
            var elements = document.querySelectorAll('#serviceCont');
            elements.forEach(function(element) {
                if (isElementInViewport(element)) {
                    element.classList.add('in-view');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);
        handleScroll(); // Call this initially to check on page load

        function isElementInViewport2(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight*8 || document.documentElement.clientHeight*8) &&
                rect.right <= (window.innerWidth*8 || document.documentElement.clientWidth*8)
            );
        }

        function handleScroll2() {
            var image = document.querySelector('.fade-image');

            if (isElementInViewport2(image)) {
                image.style.opacity = 1; /* If the image is in the viewport, make it visible */
            } else {
                image.style.opacity = 0; /* If it's not in the viewport, hide it */
            }
        }
        window.addEventListener('scroll', handleScroll2);
        window.addEventListener('resize', handleScroll2);
        handleScroll2();

        
    </script>
    <body>
        <div id="container">
            <div id="splashCont">
                <div id="header">
                    <div class="socials">
                        <div class="sRow">
                            <span class="icons"><i class="fa-brands fa-square-facebook" style="color: #ccff33;"></i></span>
                            <span class="icons"><i class="fa-brands fa-instagram" style="color: #ccff33;"></i></span>
                        </div>
                        <div class="sRow">
                            <span class="icons"><i class="fa-brands fa-square-twitter" style="color: #ccff33;"></i></span>
                            <span class="icons"><i class="fa-brands fa-linkedin"  style="color: #ccff33;"></i></span>
                        </div>
                    </div>

                    <div class="title">
                        <h1>Freeman's<br><span style="color:white;">Mowing</span></h1>
                        <img src="{{url('images/mowgo.png')}}" />
                     </div>
                </div>

                <div class="cta">
                    <h1>If you want your lawn to look immaculate, don't wait any longer.</h1>
                    <h3>Contact our lawn mowing experts today for a beautifully manicured yard that will make your neighbors green with envy! <span class="heart-beat"><button class="vine-button">CONTACT NOW →</button></span>
                    <span style="font-size:16px; color:light-grey;">(Click to trim the pesky bush)</span></h3>
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
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval=3000>
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
                    <h1>Get Your Bushes Trimmed Today!</h1>
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
                    <button class="submit" type="submit">SEND</button>
                </form>
                <img src="{{url('images/bBush.png')}}" alt="Image to Fade" class="fade-image">
            </div>
            <div id="footer">
                <div class="socials">
                    <div class="sRow">
                        <span class="icons"><i class="fa-brands fa-square-facebook" style="color: #ccff33;"></i></span>
                        <span class="icons"><i class="fa-brands fa-instagram" style="color: #ccff33;"></i></span>
                    </div>
                    <div class="sRow">
                        <span class="icons"><i class="fa-brands fa-square-twitter" style="color: #ccff33;"></i></span>
                        <span class="icons"><i class="fa-brands fa-linkedin"  style="color: #ccff33;"></i></span>
                    </div>
                </div>
                <div class="copyright">© 2023 JK Web Dev</div>
                <div class="fTitle">
                    <h1>Freeman's<br><span style="color:white;">Mowing</span></h1>
                </div>
            </div>
            
        </div>
    </body>
</html>
