@extends('layouts.layout')
@section('content')

<style>

  body {
  height: 100%;
  align-items: center;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
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


<body>
  <div  class="text-white text-center ">
    <main class="form-signin m-auto bg-dark border rounded">
      <form >
      <img class="mb-4" src="{{asset('assets/logo2.png')}}" alt="" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
      <div class="form-floating text-dark">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating text-dark">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy;2022</p>
    </form>
  </main>
</div>
</body>
@endsection