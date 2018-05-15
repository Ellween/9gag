@extends('admin.index')



@section('admin_panel')





  <div class="container_category">
    <div class="row">
      <div class="admin_section">
          <div class="col-md-6">
            <a href="/admin/category">Category</a>
            <a href="/admin/users">Users</a>
          </div>
        </div>
      <div class="col-md-4 offset-md-4">
          <form class="" action="/admin/category" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="image">Category Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "image">
          </div>
          <div class="form-group">
            <label for="category">Create Category</label>
            <input type="text" class="form-control" id="category" name= "category" >
          </div>
          <div class="category_button">
            <button class = 'btn btn-primary' type="submit" name="button">Add Category</button>
          </div>
        </form>

        <div class="izi">
          @foreach ($categories as $category)
            <li>
          <img src="{{asset('images/category_images/' . $category->image)}}" alt="">
          {{$category->category}}
        </li>
          @endforeach
        </div>
      </div>
    </div>
  </div>




@endsection
