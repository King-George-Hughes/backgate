<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-blog"></i> Manage Posts</h1>
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
          <h4>Add a new Post</h4>
          <form action="/manage-post" method="POST" class="form">
            @csrf
            <!-- Select Bank type -->
            <label for="bankTypeList" class="form-label"
              >Add bank type</label
            >
            <input
              class="form-control  @error('bank_type') is-invalid @enderror"
              list="bank_type"
              name="bank_type"
              id="bankTypeList"
              placeholder="Add a bank type"
              value="{{ old('bank_type') }}"
            />
            <datalist id="bank_type">
                @forelse ($bank_types as $bank_type)
                    <option value="{{ $bank_type->bank_type }}" name="bank_type"></option>
                @empty
                    Nothing to show
                @endforelse
              {{-- <option value="US Bank" name="bank_type"></option>
              <option value="UK Bank" name="bank_type"></option> --}}
            </datalist>
            @error('bank_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 


            <!-- Select Bank -->
            <label for="bankList" class="form-label mt-2"
              >Add bank</label
            >
            <input
              class="form-control @error('bank') is-invalid @enderror"
              list="bank"
              name="bank"
              id="bankList"
              placeholder="Add a bank"
              value="{{ old('bank') }}"
            />
            <datalist id="bank">
                @forelse ($banks as $bank)
                    <option value="{{ $bank->bank }}" name="bank"></option>
                @empty
                    Nothing to show
                @endforelse
              {{-- <option
                value="JPMorgan Chase & Co."
                name="bank"
                class="form-control"
              ></option>
              <option
                value="Bank of America Corp."
                name="bank"
                class="form-control"
              ></option>
              <option
                value="Wells Fargo & Co."
                name="bank"
                class="form-control"
              ></option>
              <option value="Chase Bank" 
              class="form-control"></option>
              <option
                value="PNC Financial Services Inc."
                name="bank"
                class="form-control"
              ></option>
              <option value="Chime Bank" 
                class="form-control"
                name="bank">
              </option>
              <option value="Citigroup Inc." 
                class="form-control"
                name="bank">
              </option>
              <option
                value="Wood Forest Bank"
                name="bank"
                class="form-control"
              ></option> --}}
            </datalist>
            @error('bank')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <!-- Price -->
            <label for="price" class="form-label mt-2">Price</label>
            <input
              type="number"
              id="price"
              name="price"
              class="form-control @error('price') is-invalid @enderror"
              value="{{ old('price') }}"
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
              class="form-control @error('balance') is-invalid @enderror"
              value="{{ old('balance') }}"
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
                  <th scope="col">Bank Type</th>
                  <th scope="col">Bank</th>
                  <th scope="col">Price</th>
                  <th scope="col">Balance</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $number = 1;    
                @endphp
                @forelse ($posts as $post)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ $post->bank_type }}</td>
                    <td>{{ $post->bank }}</td>
                    <td>{{ $post->price }}</td>
                    <td>{{ $post->balance }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        <div class="d-flex">
                          <a href="/post/{{ $post->id }}/edit" class="btn btn-sm btn-outline-warning">Edit</a>
                          <a href="#" class="btn btn-sm btn-outline-info">Preview</a>
                          <form action="/post/{{ $post->id }}" method="POST">
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
                {{ $posts->links() }}
            </div>
          </div>
      </div>
</x-admin-layout>