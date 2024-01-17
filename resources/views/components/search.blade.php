<section class="container text-center" id="blogs">

    <form action="/" class="my-3" method="GET">
      <div class="input-group mb-3">
        <input
          value="{{ request('category') }}"
          type="hidden"
          autocomplete="false"
          class="form-control"
          name="categoriy" />

          <input
          value="{{ request('users') }}"
          type="hidden"
          autocomplete="false"
          class="form-control"
          name="users" />

        <input
          value="{{ request('search') }}"
          type="text"
          autocomplete="false"
          class="form-control"
          placeholder="Search Blogs..."
          name="search"
        />
        <button
          class="input-group-text bg-primary text-light"
          id="basic-addon2"
          type="submit"
        >
          Search
        </button>

      </div>
    </form>