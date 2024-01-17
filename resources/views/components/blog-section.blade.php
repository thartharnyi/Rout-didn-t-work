@props(['blogs'])

    <div class="row">
      
      @foreach ($blogs as $blog)
      <div class="col-md-4 mb-4">
        <x-blog-card :blog="$blog" />
      </div> 
      @endforeach
      {{ $blogs->links() }}
      
      </div>
      