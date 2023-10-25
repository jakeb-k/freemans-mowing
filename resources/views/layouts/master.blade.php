<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title') 
        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.scss')}}" type="text/css">
        <link rel="icon" type="image/x-icon" href="{{url('favicon.ico')}}">
        
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
        <div id="header">
                    <div class="socials">
                        <div class="sRow">
                            <span class="icons"><i class="fa-brands fa-square-facebook" style="color: #ccff33;"></i></span>
                            <span class="icons"><i class="fa-brands fa-instagram" style="color: #ccff33;"></i></span>
                        </div>

                        <div class="sCol">
                            <a href='{{url("posts")}}'>
                                <button>POSTS</button>
                            </a>
                            <a class="contactBtn">
                                <button>CONTACT</button>
                            </a>
                           
                        </div>

                    </div>

                    <div class="title">
                        <h1>Freeman's<br><span style="color:white;">Mowing</span></h1>
                        <img src="{{url('images/mowgo.png')}}" />
                     </div>
                </div>
    @yield('content')
    <div id="footer">
                <div class="socials">
                    <div class="sRow">
                        <span class="icons"><i class="fa-brands fa-square-facebook" style="color: #ccff33;"></i></span>
                        <span class="icons"><i class="fa-brands fa-instagram" style="color: #ccff33;"></i></span>
                    </div>
                    <div class="sCol">
                        <a href='{{url("posts")}}'>
                            <button>POSTS</button>
                        </a>
                        <a class="contactBtn">
                            <button>CONTACT</button>
                        </a>       
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
