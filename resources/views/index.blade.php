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
                    <h3>Contact our lawn mowing experts today for a beautifully manicured yard that will make your neighbors green with envy! <span><button>CONTACT NOW! →</button></span></h3>
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
            <!-- 
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
            </div>--> 
        </div>
    </body>
</html>
