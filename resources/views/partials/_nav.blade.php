<header>
  <div class="nav_container">
    <div class="nav_logo">
       <img src = '/images/nav_logo.png' alt = "9gag logo">
    </div>
    <div class= "nav_list">
      <ul class = 'nav_ul'>
        <li><a href="#"></a>Videos</li>
        <li><a href="#"></a>Get Our App!</li>
        <li><a href="#"></a>NSFW Clothing-Sale</li>
      </ul>
    </div>

    <div class = 'search-login-sign'>
      <div class="user-box">
            <div class="search-box">
              <p class = 'search-icon'><i class="fas fa-search"></i></p>
            </div>

            <div class="search-box-panel">
              <form class="" action="index.html" method="post">
                  <input type="search" name="search" value="" placeholder="Type to search...">
              </form>
            </div>

              @if(Auth::check())
                <div class = 'log-out'><img src = '/images/avatars/{{ Auth::user()->avatar}}' style="width:32px; height: 32px; border-radius:50%">
                </div>
                <div class = 'upload-btn'>Upload</div>
                <div class="drop-down-section">
                  <ul class ='drop-down-ul'>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="/settings/profile">Settings</a></li>
                    <li><a href="{{ route('logout')}}">Logout</a></li>
                  </ul>
                </div>

              @else
                <div class = 'login-main'>Log in</div>
                <div class = 'sign-up'>Sign up</div>
              @endif

    </div>
  </div>
</div>

</header>
