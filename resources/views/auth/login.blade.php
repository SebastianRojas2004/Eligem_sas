<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    @vite(['resources/css/login.css'])

  </head>
  <body>

    <div class="login-box">      
      <h1>Login</h1>
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <!-- CORREO INPUT -->
        <label for="username">Correo</label>
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresar correo">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <!-- CONTRASEÑA INPUT -->
        <label for="password">Contraseña</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingresar contraseña">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
            <br>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif             
            <br>           
        {{ __('Remember Me') }}
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
        </label>
      </form>
    </div>
  </body>
</html>