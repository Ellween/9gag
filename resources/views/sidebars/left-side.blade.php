<div class="test-left">
  <div class="left-side">
      <section class = 'up'>
        <h3>Popular</h3>
        <ul>
          <li><i class="fas fa-burn"></i>Hot</li>
          <li><i class="fas fa-burn"></i>Tranding</li>
          <li><i class="fas fa-burn"></i>Fresh</li>
        </ul>
      </section>

      <section class = 'up bar'>
        <h3>sections</h3>
        <ul>
          @foreach ($categories as $category)
            <li>
          <img src="{{asset('images/category_images/' . $category->image)}}" alt="">
          {{$category->category}}
        </li>
          @endforeach
        </ul>
      </section>

      <section class = 'footer'>
        <div class = 'link'>
          <a href="#">Advertise</a>
          <a href="#">Rules</a>
          <a href="#">Tips</a>
          <a href="#">FAQ</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Jobs</a>
          <a href="#">Contact</a>
        </div>

        <div class="site-date">
          <p class = 'date'>9GAG © 2018</p>
        </div>
      </section>
  </div>
</div>
