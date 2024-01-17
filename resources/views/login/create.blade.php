<x-layout>
<div class="container">
    <h1>Login Form</h1>
    <form action="/login" method="POST">@csrf
    <div class="form-group my-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email')}}">
    </div>
    @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror


<div class="form-group my-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  @error('password')
    <p class="text-danger">{{ $message }}</p>
  @enderror
  <button type="submit" class="btn btn-primary">Login</button>
 </div>

</form>
</div>
</x-layout>