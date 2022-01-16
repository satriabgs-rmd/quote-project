@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-3">
  <div class="col-lg-4">

    @if(session()->has('success'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endIf

    @if(session()->has('loginFail'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginFail') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endIf

    <main class="form-signin text-center">
      <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @endError" id="username" placeholder="username" value="{{ old('username') }}" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
          @endError
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block mt-3">Don't have an account yet? <a href="/register" class="text-decoration-none">register now!</a></small>
    </main>
  </div>
</div>



@endsection
