@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="floatingInput">Name</label>
          @error('name')
              <div class="invalidfeedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
            <input type='text' name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="floatingInput">Username</label>
          @error('username')
              <div class="invalidfeedback"> 
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
            <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
        @error('email')
            <div class="invalidfeedback">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="password" name='password' class="form-control  rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
          <label for="Password">Password</label>
        @error('password')
          <div class="invalidfeedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <button class="w-100 btn btn-lg btn-dark" type="submit" >Register</button>
      </form>
      <small class="d-block text-center mt-3">Sudah Punya Akun ? <a href="/login">Masuk</a></small>
    </main>
  </div>
 </div>
</div>
@endsection