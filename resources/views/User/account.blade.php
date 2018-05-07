@extends('main')


@section('content')

  @include('User.profile_section')

  <div class="account-right-section">
    <div class="account-update-form">
      <div class="account-update-heading">
        <h1>Account</h1>
      </div>
      <form class="account-change-form" action="/settings/account" method="post">
        @csrf
        <div class="Username">
          <label for="input_username">Username</label><br>
          <input type="text" name="input_username" value="{{$user->input_username}}">
          <p>https://9gag.com/u/</p>
        </div>

        <div class="user-email">
          <label for="input_email">Email</label><br>
          <input type="text" name="input_email" value="{{$user->email}}">
          <p>This is Some Shiet Text i Dont <br> know what about it is </p>
        </div>

        <div class="mask-sensitive">
          <label for="mask-sensitive-content">Mask Sensitive Content</label><br>
          <select class="" name="mask-sensitive-content">
            <option value="On" selected="">On</option>
            <option value="Off">Off</option>
          </select>
        </div>

        <div class="Save">
          <button type="submit" name="button">Save Changes</button>
        </div>
      </form>
    </div>
  </div>

@endsection
