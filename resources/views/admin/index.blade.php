<x-admin-layout>
    <h1>Blog List</h1> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Introduction</th>
      <th scope="col">Category</th>
      <th scope="col">Body</th>
      <th scope="col"></th> 
      <th scope="col"></th>
    </tr>
    </thead>

    <tbody>
  @foreach ($blogs as $blog)
    <tr>
      <th scope="row" class="table-secondary">{{ $blog->id }}</th>
      <td class="table-primary">{{ $blog->user->name }}</td>
      <td class="table-secondary">{{ $blog->title }}</td>
      <td class="table-primary">{{ $blog->slug }}</td>
      <td class="table-secondary">{{ $blog->intro }}</td>
      <td class="table-primary">{{ $blog->category->name }}</td>
      <td class="table-active" rowspan="50px">{{ $blog->body }}</td>
      <td class="table-primary">
        <a href="/admin/{{ $blog->id }}/edit" class="btn btn-info">Edit</a>
      </td>

      <td class="table-secondary">
        <form action="/admin/{{ $blog->id }}/delete" method="POST">
            @csrf
            @method('delete')
        <button class='btn btn-danger'>Delete</button>
        </form>
      </td>
    </tr>
    </tbody>
    @endforeach
</table>

{{ $blogs->links() }}
</x-admin-layout>
