@props(['categories', 'currentCategory']);
<section class="container text-center" id="blogs">
    <div class="">
        <h1 class="display-5 fw-bold mb-4">Blogs</h1>
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
            
            {{ isset($currentCategory) ? $currentCategory : 'Filter By Category' }}    

            </button>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li>
                        <a class="dropdown-item"
                            href="/?category={{ $category->slug }}{{ request('search') ? '&search=' . request('search') : '' }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>
