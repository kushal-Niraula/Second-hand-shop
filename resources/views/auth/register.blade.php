



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registration Form</title>
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Registration Form
         </div>
         <form method="POST" action="{{ route('register') }}">
            @csrf
		<div class="field">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
               <label>Name</label>
            </div>
            <div class="field">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Email Address</label>
            </div>
		<div class="field">
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
               <label>Phone</label>
            </div>
		<div class="field">
            <input id="postcode" type="postcode" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode">

            @error('postcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
               <label>Postcode</label>
            </div>
            <div class="field">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Password</label>
            </div>
		<div class="field">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               <label>Confirm Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Signup">
            </div>
            <div class="signup-link">
                Already a member? <a href="{{ route('login') }}">Login </a>
             </div>
         </form>
      </div>
   </body>
</html>
