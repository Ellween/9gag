

  <div class = 'upload'>
  <div class="upload-container">
    <div class = 'inside'>

      <form class="form-section" action="/upload" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="first-step active">
          <div class="upload-heading">
              <span class ='btn-close'>&times;</span>
              <h3>Upload a Post</h3>
              <p class ='p-upload'>Choose how you want to upload the post</p>
          </div>
          <div class="default-button">
            <input class = 'default-upload-button' type="file" name="picture" value=""><br>
          </div>
          <div class="picture-upload">
            <div class="upload_image">
            </div>
            <div class="pic-upload-container">
              <p>Drop image to upload or</p>
              <button class='picture-upload-btn' type="button" name="button">Choose files...</button>
            </div>
          </div>

          <div class="past-image URL">
            <img src="/images/upload/image-pic.png" alt="">
            <p>Pase image URL</p>
          </div>

          <div class="past-video URL">
            <img src="/images/upload/video-pic.png" alt="">
            <p>Past video URL</p>
          </div>

          <div class="create-meme URL">
            <img src="/images/upload/troll-face.png" alt="">
            <p>Male meme</p>
          </div>
        </div>




        <div class="second-step">
          <div class="second-upload-heading">
              <span class ='btn-close'>&times;</span>
              <h3>Give your post a title</h3>
              <p class ='second-p-upload'>An accurate, descriptive title can help people discover your post.</p>
          </div>

          <div class="upload-description">
            <div class="picture-title">
              <div class="picture">

              </div>

              <div class="title-for-picture">
                <textarea name="title" rows="4" cols="25" placeholder="Describe your post..."></textarea>
              </div>
            </div>

            <div class="picture-tags">
              <label for="tags">Tag</label>
              <div class="tag_container">
                <input class = 'upload_tags' type="text" name="tags[]" value="" placeholder="tag1,tag2,tag3" multiple ='multiple'>
              </div>
          </div>

          <div class="upload_btn">
            <button class = 'next' type="button" name="next">next</button>
          </div>
        </div>
      </div>

      <div class="third-step">
        <div class="third-upload-heading">
          <span class ='btn-close'>&times;</span>
          <h3>Pick a Section</h3>
          <p>Submitting to the right section to make sure your post gets the right exposure it deserves!</p>
        </div>

        <div class="third-upload-description">
          <div class="category_list">
            @foreach ($categories as $category)
              <li>
            <img src="{{asset('images/category_images/' . $category->image)}}" alt="">
            <label>{{$category->category}}</label><input type="checkbox" name="category" value="{{$category->category}}">
          </li>
            @endforeach
          </div>

          <div class="save_post">
            <button class = 'save' type="submit" name="button">Save</button>
          </div>
        </div>

      </div>




      </form>



  </div>
  </div>
</div>
