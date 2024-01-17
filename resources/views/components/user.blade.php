@props(['users','currentUser'])
<section class="container text-center" id="blogs">
    <div class="">
      <h1 class="display-5 fw-bold mb-4">Blogs</h1>
  <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

        {{ isset($currentUser) ? $currentUser->name : 'Filter By User' }}

      </button>
      <ul class="dropdown-menu">
        @foreach ($users as $user)
        <li>
          <a class="dropdown-item" 
          href="/?users={{ $user->username }}{{ request('search') ? '&search='.request('search') : '' }}">{{ $user->name }}</a></li>
        @endforeach
      </ul>
    </div>
  
  </div>
  </section>