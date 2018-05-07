

  <div class = 'register'>
  <div class="login-container">
    <div class = 'inside'>
      <div class="sign-up-heading">
          <span class ='btn-close'>&times;</span>
        <h1>Become a member</h1>
      </div>
    <div class="register-form-section">
      <form class="" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="name-form">
          <label for="name">Fullname</label><br>
          <input claas = 'register-name' type="text" name="name" value="">
        </div>
        <div class="email-form">
          <label for="email">Email Adress</label><br>
          <input class = 'register-email' type="email" name="email" value="">
        </div>
        <div class="password-form">
          <label for="password">Password</label><br>
          <input class ='register-pass' type="password" name="password" value="">
        </div>
        <input class = 'submit-form' type="submit" name="Submit" value="Sign Up">
      </form>
    </div>

  </div>

  </div>
  </div>
