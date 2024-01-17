@props(['blog'])
<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="/images/it.jpg"
                    class="card-img-top" alt="..." />
                <h3 class="my-3">{{ $blog->title }}</h3>
                <div>
                    <div class="mt-3">Author - <a href="/?users={{ $blog->user->username }}">{{ $blog->user->name }}</a></div>
                    <a href="/?category={{ $blog->category->slug }}">
                        <div class="badge bg-primary mt-3">{{ $blog->category->name }}</div>
                    </a>
                    <div class="text-primary mt-3"><b>{{ $blog->created_at->diffForHumans() }}</b></div>
                </div>
                 <div class="mt-3">
                    
                    <form action="/blogs/{{ $blog->slug }}/handle-subscription" method="post">@csrf
                        @if ($blog->isSubscribedBy(auth()->user()))
                       <button class="btn btn-danger">unsubscribe</button> 
                    @else
                       <button class="btn btn-warning mx-3">subscribe</button> 
                    @endif
                    </form>
                    
                    
                </div>

                <p class="lh-md mt-3">
                    {{ $blog->body }}
                </p>
            </div>
           
            
        </div>

        <x-comment :blog='$blog'/>
    </div>

    <!-- subscribe new blogs -->
    <x-subscribe />

    {{-- random blog --}}
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>
