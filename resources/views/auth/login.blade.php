
  <div class = 'log'>
  <div class="login-container">
    <div class = 'inside'>
    <div class = "section-inside">
      <span class ='btn-close'>&times;</span>
      <h1>Login</h1>
      <p>Connect with social network</p>
    </div>
{{--
    <div class="Fb-Google">
      <div class="fb">
        <h1 class = 'fb-h1'>Facebook</h1>
      </div>
      <div class="Google">
        <h1 class = 'Google-h1'>Google</h1>
      </div>
    </div> --}}
    <hr class = 'login-hr'>
    <div class="login-form-section">
      <form class="" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <p>Log in with your email adress</p>
        <div class="emial-form">
          <label for="email">Email</label><br>
          <input class = ' login-email' type="email" name="email" value="">
        </div>
        <div class="password-form">
          <label for="password">Password</label><br>
          <input class = 'login-password'type="password" name="password" value="">
        </div>
        <input  class = 'submit-form' type="submit" name="Submit" value="Login">
      </form>
    </div>

  </div>

  </div>
  </div>
