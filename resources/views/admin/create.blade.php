<x-admin-layout>
    <h1>Blog Create</h1>
    <form action="/admin/blogs/store" method="POST"> @csrf
    <div class="container">
        <div class="row">
        
           
        <div class="form-group mt-3">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control mt-3" id="formGroupExampleInput" placeholder="Enter Blog Title" name="title">
        </div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group mt-3">
            <label for="formGroupExampleInput2">Slug</label>
            <input type="text" class="form-control mt-3" id="formGroupExampleInput2" placeholder="Enter slug" name="slug">
        </div>
        @error('slug')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-groupmt-3">
            <label for="formGroupExampleInput">Introduction</label>
            <input type="text" class="form-control mt-3" id="formGroupExampleInput" placeholder="Enter Blog Introduction" name="intro">
        </div>
        @error('intro')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="dropdown mt-3">
            <label for="formGroupExampleInput">Category</label>
        <select name="category_id" id="">
            
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>
        @error('category_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group mt-3">
            Blog Body<br>
            <textarea class="mt-3" name="body" id="" cols="100" rows="10" placeholder="Enter Blog Body"></textarea>
        @error('body')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <button class="btn btn-primary my-3" type="submit">Create</button>
        
        </div>
    </div>
</form>
</x-admin-layout>
