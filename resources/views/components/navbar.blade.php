<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Creative Coder</a>
      <div class="d-flex">
        @if (auth()->check())
          <form action="/logout" method="post">@csrf
            <button class="btn btn-danger">Logout</button>
          </form>
        @else
          <a href="/login" class="nav-link">Login</a>

          <a href="/register" class="nav-link">Register</a>
        @endif

        <a href="/" class="nav-link">Home</a>
        <a href="/#blogs" class="nav-link">Blogs</a>
        <a href="#subscribe" class="nav-link">Subscribe</a>
      </div>
    </div>
  </nav>