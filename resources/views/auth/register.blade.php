@extends("layouts.default")
@section("style")
<style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
@endsection
@section("content")
<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{route("register.Post")}}">
      @csrf
      <img class="mb-4" src="{{asset("assets\img\logo.png")}}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Create your account </h1>
 
       <div class="form-floating">
        <input name="name" id="name" type="text" class="form-control"   placeholder="Enter name">
        <label for="name">Full name</label>
      </div>

        @error('name')
          <span class ="text-danger">{{ $message }}</span>
        @enderror

      <div class="form-floating">
        <input name="email" id="email" type="email" class="form-control"  placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
       @error('email')
          <span class ="text-danger">{{ $message }}</span>
          @enderror
      
      <div class="form-floating">
        <input name="password" id="password"  type="password" class="form-control"  placeholder="Password">
        <label for="password">Password</label>
      </div>
        @error('password')
          <span class ="text-danger">{{ $message }}</span>
         @enderror
      
      <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2025</p>
    </form>
  </main>
  @endsection