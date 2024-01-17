<x-layout>
<div class="container">
    <h1>Comment Edit</h1>
    <form action="/comments/{{ $comment->id }}/update" method="post">
        @csrf
        @method('patch')
    <div class="my-3">
    <textarea class="form-control" id="" cols="3" rows="10" placeholder="Comment here..." name="body">
        {{ $comment->body }}
    </textarea>
    @error('body')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <button class="btn btn-primary mt-3" type="submit">Update</button>
    </div>
    </form>
</div>
</x-layout>