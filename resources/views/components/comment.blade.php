<div class="my-3">
    <form action="/blogs/{{ $blog->slug }}" method="post">@csrf
    <textarea class="form-control" id="" cols="30" rows="10" placeholder="Comment here..." name="body"></textarea>
    <button class="btn btn-primary mt-3" type="submit">Comment</button>
    </form>
</div>

<section style="background-color: #f7f6f6;">
@foreach ($blog->comments()->with('user')->orderby('id','desc')->get() as $comment)
        <div class="card mb-3">
          <div class="card-body">
            <div class="d-flex flex-start">
              
              <div class="w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                     <h6 class="text-primary fw-bold mb-0">
                        {{ $comment->user->name }}>
                    <span class="text-dark ms-2">{{ $comment->body }}</span>
                    </h6>  
                </div>
                  {{ $comment->created_at->diffForHumans() }}
                
              </div>
            </div>

            @if (auth()->check() && auth()->user()->id == $comment->user->id)

            <div class="d-flex my-3">
            <a href="/comments/{{ $comment->id }}/edit" class="btn btn-success mx-2">Edit</a>
            
            
            <form action="/comments/{{ $comment->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>

            @else

            <button class="btn btn-secondary mx-2 mt-2" disabled>Edit</button>
            <button class="btn btn-secondary mx-2 mt-2" disabled>Delete</button>
              
            @endif
            



          </div>
        </div>
        
 @endforeach
</section>
