@extends('admin.index')



@section('admin_panel')





  <div class="container_category">
    <div class="row">
      <div class="admin_section">
          <div class="col-md-4">
            <a href="/admin/category">Category</a>
            <a href="/admin/users">User</a>
          </div>
        </div>
      <div class="col-md-4 offset-md-4">
        @foreach ($users as $user)
          <li>{{$user->name}}</li>
        @endforeach
      </div>
    </div>
  </div>




@endsection
