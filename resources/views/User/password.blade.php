@extends('main')


@section('content')
  @include('User.profile_section')

  <div class="password-right-section">
    <div class="pasword-change-heading">
      <h1>Password</h1>
    </div>

    <div class="form-change-password">
      <form class="" action="/settings/password" method="post">
        @csrf
        <div class="old-password password-change">
          <label for="old_password">Old Password</label>
          <input type="password" name="old_password" value="">
        </div>

        <div class="new-password-input password-change">
          <label for="new_password">New Password</label>
          <input type="password" name="new_password" value="">
        </div>



        <div class="Save">
          <button type="submit" name="button">Save Changes</button>
        </div>
      </form>
    </div>
  </div>

@endsection
