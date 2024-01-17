<x-layout>
    <div class="container">
        <h1>Update Your Blog</h1>
        <form action="/admin/{{ $blog->id }}/update" method="POST">
            @csrf
            @method('patch')



            <div class="row mt-3">
            <textarea name="body" id="" cols="30" rows="10">{{ $blog->body }}</textarea>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            
            <div class="mt-3">     
                <button class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>
</x-layout>