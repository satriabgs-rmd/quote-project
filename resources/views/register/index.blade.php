@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-3">
  <div class="col-lg-6">
    <main class="form-signin">
      <form action="/register" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name') is-invalid @endError" id="name" placeholder="name" value="{{ old('name') }}" required>
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @endError
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @endError" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @endError
        </div>

        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @endError" id="username" placeholder="username" value="{{ old('username') }}" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @endError
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @endError" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback mb-2">
            {{ $message }}
          </div>
          @endError
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

      </form>
      <small class="d-block mt-3 text-center">Already have an account? <a href="/login" class="text-decoration-none">Login now!</a></small>
    </main>
  </div>
</div>



@endsection
