
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Secondhand shop</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="field">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Email Address</label>
            </div>
            <div class="field">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">Forgot password?</a>
                  @endif
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
                            
            </div>
            <div class="signup-link">
               Not a member? <a href="{{ route('register') }}">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>
