<x-layout>
<form action="" method="POST">
    @csrf
 <div class="container">

    <div class="form-group mt-3">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{ old('name') }}">
  </div>
  @error('name')
    <p class="text-danger">{{ $message }}</p>
  @enderror

     <div class="form-group mt-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email')}}">
  </div>
  @error('email')
    <p class="text-danger">{{ $message }}</p>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username" value="{{old('username')}}">
  </div>
  @error('username')
    <p class="text-danger">{{ $message }}</p>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  @error('password')
    <p class="text-danger">{{ $message }}</p>
  @enderror

  

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
 </div>

</x-layout>