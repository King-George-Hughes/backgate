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
          <h4>Edit Post</h4>
          <form action="/post/{{ $post->id }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <!-- Select Bank type -->
            <label for="bankTypeList" class="form-label"
              >Add bank type</label
            >
            <input
              class="form-control  @error('bank_type') is-invalid @enderror"
              list="bank_type"
              name="bank_type"
              id="bankTypeList"
              value="{{ $post->bank_type }}"
            />
            <datalist id="bank_type">
                @forelse ($bank_types as $bank_type)
                    <option value="{{ $bank_type->bank_type }}" name="bank_type"></option>
                @empty
                    Nothing to show
                @endforelse
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
              value="{{ $post->bank }}"
            />
            <datalist id="bank">
                @forelse ($banks as $bank)
                    <option value="{{ $bank->bank }}" name="bank"></option>
                @empty
                    Nothing to show
                @endforelse
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
              value="{{ $post->price }}"
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
              value="{{ $post->balance }}"
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
            >{{ $post->description }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <button type="submit" class="btn btn-primary mt-2">Update Post</button>
          </form>
          <!--  -->
        </div>
      </div>
</x-admin-layout>