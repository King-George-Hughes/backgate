<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-piggy-bank"></i> Manage Dumps and Pins</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                Share
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                Export
            </button>
            </div>
            <button
            type="button"
            class="btn btn-sm btn-outline-secondary dropdown-toggle"
            >
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
            </button>
        </div>
        </div>

    <div class="row mb-5">
        <div class="col-md-6">
          <h4>Add a new D+P</h4>
          <form action="/manage-d&p" method="POST" class="form">
            @csrf
            <!-- Price -->
            <label for="price" class="form-label mt-2">Price</label>
            <input
              type="number"
              id="price"
              name="price"
              value="{{ old('price') }}"
              class="form-control  @error('price') is-invalid @enderror"
            />
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <!-- Balance -->
            <label for="balance" class="form-label mt-2">Balance</label>
            <input
              type="number"
              id="balance"
              name="balance"
              value="{{ old('balance') }}"
              class="form-control @error('balance') is-invalid @enderror"
            />
            @error('balance')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <!-- Description -->
            <label for="description" class="form-label mt-2"
              >Description</label
            >
            <textarea
              name="description"
              id="description"
              cols="30"
              rows="5"
              class="form-control @error('description') is-invalid @enderror"
            >{{ old('description') }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <button type="submit" class="btn btn-primary mt-2">Add Post</button>
          </form>
          <!--  -->
        </div>

        {{--  --}}
        <div class="table-responsive mb-5 mt-5">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Dumps & Pins</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Balance</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $number = 1;    
                @endphp
                @forelse ($dandps as $dandp)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ 'Dumps + Pins' }}</td>
                    <td>{{ $dandp->description }}</td>
                    <td>{{ $dandp->price }}</td>
                    <td>{{ $dandp->balance }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/dandp/{{ $dandp->id }}/edit" class="btn btn-sm btn-outline-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-info">Preview</a>
                        <form action="/dandp/{{ $dandp->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                      </div>
                  </td>
                </tr>
                @empty
                    Nothing to show
                @endforelse
              </tbody>
            </table>

            <div class="mb-3 p-4 pagination-md">
              {{ $dandps->links() }}
          </div>
          </div>
      </div>
</x-admin-layout>