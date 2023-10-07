<!DOCTYPE html>
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Freeman's Mowing</title>
      
        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.scss')}}" type="text/css">
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body>
        <div id="container">
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
            </div>
        </div>
    </body>
</html>
