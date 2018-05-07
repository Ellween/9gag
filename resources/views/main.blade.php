<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._nav')

<div class="include-login">
  @include('auth.login')

</div>

<div class="include-register">
  @include('auth.register')

</div>

<div class="include-Upload">
  @include('posts.create')
</div>


      <section class = 'posts'>
        @include('sidebars.left-side')





        <div class = 'main-post'>

        @yield('content')

        </div>

        @include('sidebars.right-side')

      </section>



      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src = '/js/login.js'>

      </script>
  </body>
</html>
