<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./style.css">
    @vite(['resources/css/login.css'])
    @vite(['resources/js/alert.js'])

  </head>
  <body>
  <div class="container">
	<div class="screen">
		<div class="screen__content">    
      <form method="POST" action="{{ route('login') }}" class="login">
      <label for=""><strong>Bienvenido a Eligem</strong></label>
      <div class="login__field">					
      @csrf
      <i class="login__icon fas fa-user"></i>        
        <input id="email" type="text" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresar correo">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
        <!-- CONTRASEÑA INPUT -->
        <div class="login__field">
					<i class="login__icon fas fa-lock"></i>          
          <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingresar contraseña">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>    
            <button type="submit" class="button login__submit">
              <span class="button__text">{{ __('Iniciar Sesion') }}</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </button>
</form>
			<div class="social-login">				
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>